<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Models\Kategory;
use App\Models\subKategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk.
     */
    public function index()
    {
        $pageTitle = 'Daftar Produk';
        $products = Product::all();

        return view('products.index', compact('pageTitle', 'products'));
    }

    /**
     * Menampilkan form untuk membuat produk baru.
     */
    public function create()
    {
        $pageTitle = 'Tambah Produk Baru';
        $categories = DB::table('kategorys')->get();
        $subcategories = DB::table('subkategorys')->get();

        return view('products.create', compact('pageTitle', 'categories', 'subcategories'));
    }

    /**
     * Menyimpan produk baru ke dalam database.
     */
    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3148',
        'name' => 'required',
        'price' => 'required|numeric',
        'kategory' => 'required',
        'subkategory' => 'required',
    ]);

    $product = new Product();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $file_name = $product->storeImage($file); // Simpan gambar ke direktori storage/app/public/images dan dapatkan nama filenya
        $product->image = $file_name;
    }

    $product->name = $request->name;
    $product->price = $request->price;
    $product->kategorys_id = $request->kategory; // Pastikan kolom kategorys sesuai di tabel
    $product->subKategorys_id = $request->subkategory; // Pastikan kolom subkategorys sesuai di tabel

    $product->save();

    Alert::success('Added Successfully', 'Products Data Added Successfully.');

    return redirect()->route('products.index')->with('success', 'Produk telah ditambahkan');
}


    /**
     * Menampilkan detail produk.
     */
    public function show($id)
    {
        // $product = Product::find($id);

        // return view('products.show', compact('product'));
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function edit($id)
{
    $product = Product::find($id);
    $product->subKategorys_id;
    $pageTitle = 'Edit Produk: ' . $product->name;

    $categories = DB::table('kategorys')->get();
    $subcategories = DB::table('subkategorys')->get();

    return view('products.edit', compact('pageTitle', 'product', 'categories', 'subcategories'));
}

    /**
     * Memperbarui produk yang ada di dalam database.
     */
    /**
 * Memperbarui produk yang ada di dalam database.
 */
public function update(Request $request, $id)
{
    $product = Product::find($id);

    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'kategory' => 'required',
        'subkategory' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:3148', // Tambahkan validasi gambar di sini
    ]);

    $product->name = $request->name;
    $product->price = $request->price;
    $product->kategorys_id = $request->kategory;
    $product->subKategorys_id = $request->subkategory;

    // Cek apakah ada file gambar baru diunggah
    if ($request->hasFile('image')) {
        // Hapus foto lama dari storage jika ada
        if (!empty($product->image)) {
            Storage::delete('images/' . $product->image);
        }

        // Unggah foto baru dan simpan nama file ke dalam database
        $file = $request->file('image');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('images', $file_name);
        $product->image = $file_name;
    }

    $product->save();

    Alert::success('Changed Successfully', 'Products Data Changed Successfully.');

    return redirect()->route('products.index')->with('success', 'Produk telah diperbarui');
}


    /**
     * Menghapus produk dari database.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
            // Hapus foto dari storage jika ada
        if (!empty($product->image)) {
            Storage::delete('public/images/' . $product->image);
        }

        // Hapus data produk dari database
        $product->delete();

        Alert::success('Deleted Successfully', 'Products Data Deleted Successfully.');

        return redirect()->route('products.index')->with('success', 'Produk telah dihapus');
    }

    public function food()
{
    $pageTitle = 'Food';
    $products = Product::whereHas('kategory', function ($query) {
        $query->where('name', 'Food');
    })->get();

    return view('products.food', compact('pageTitle', 'products'));
}
    public function drink()
{
    $pageTitle = 'Drink';
    $products = Product::whereHas('kategory', function ($query) {
        $query->where('name', 'Drink');
    })->get();

    return view('products.drink', compact('pageTitle', 'products'));
}




}
