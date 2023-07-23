<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'price' => 'required|numeric',
            'kategory' => 'required',
            'subkategory' => 'required',
        ]);

        $product = new Product();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $file_name);
            $product->image = $file_name;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->kategorys_id = $request->kategory; // Pastikan kolom kategorys sesuai di tabel
        $product->subKategorys_id = $request->subkategory; // Pastikan kolom subkategorys sesuai di tabel

        $product->save();
        Alert::success('Added Successfully', 'Employee Data Added Successfully.');

        return redirect()->route('products.index')->with('success', 'Produk telah ditambahkan');
    }

    /**
     * Menampilkan detail produk.
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function edit($id)
{
    $product = Product::find($id);
    $pageTitle = 'Edit Produk: ' . $product->name;

    $categories = DB::table('kategorys')->get();
    $subcategories = DB::table('subkategorys')->get();

    return view('products.edit', compact('pageTitle', 'product', 'categories', 'subcategories'));
}

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
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->kategorys_id = $request->kategory; // Pastikan kolom kategorys sesuai di tabel
        $product->subkategorys_id = $request->subkategory; // Pastikan kolom subkategorys sesuai di tabel

        $product->save();

        Alert::success('Changed Successfully', 'Employee Data Changed Successfully.');

        return redirect()->route('products.index')->with('success', 'Produk telah diperbarui');
    }

    /**
     * Menghapus produk dari database.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        Alert::success('Deleted Successfully', 'Employee Data Deleted Successfully.');

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
public function exportExcel()
{
    return Excel::download(new ProductsExport, 'products.xlsx');
}



}
