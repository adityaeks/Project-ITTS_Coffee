<?php


use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ProductsExport implements FromView, WithStyles, ShouldAutoSize, WithEvents, WithDrawings
{
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function view(): View
    {
        return view('products.export_excel', [
            'products' => Product::all()
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // Mendapatkan semua data produk
                $products = Product::all();

                // Mendapatkan lokasi direktori tempat gambar disimpan
                $imagePath = public_path('images');

                // Menyisipkan gambar ke dalam setiap sel pada kolom gambar
                foreach ($products as $index => $product) {
                    $row = $index + 2; // Diawali dari baris kedua karena baris pertama biasanya berisi header
                    $imageFile = $imagePath . '/' . $product->image;
                    $drawing = new Drawing();
                    $drawing->setName('Product Image');
                    $drawing->setDescription('Product Image');
                    $drawing->setPath($imageFile);
                    $drawing->setHeight(50); // Sesuaikan tinggi gambar sesuai kebutuhan
                    $drawing->setCoordinates('A' . $row); // Kolom A berisi gambar, sesuaikan dengan kolom yang sesuai di spreadsheet Anda
                    $event->sheet->getDelegate()->getCell('A' . $row)->setValue($drawing);
                }
            },
        ];
    }

    public function drawings()
    {
        return [];
    }
}
