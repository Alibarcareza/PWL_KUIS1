<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            ['jenis_barang' => 'Kemeja',
            'bahan' => 'Katun',
            'ukuran' => 'L',
            'warna' => 'Hitam',
            'merk' => 'Zara',
            'harga' => '100.000',
            'gambar' => 'gambar1.jpg'
        ],
            ['jenis_barang' => 'Kaos',
            'bahan' => 'Cutton Combed',
            'ukuran' => 'S',
            'warna' => 'Hitam',
            'merk' => 'Cottonology',
            'harga' => '95.000',
            'gambar' => 'gambar2.jpg'
        ],
            ['jenis_barang' => 'Jaket',
            'bahan' => 'Parasut',
            'ukuran' => 'L',
            'warna' => 'Hitam',
            'merk' => 'Adidas',
            'harga' => '120.000',
            'gambar' => 'gambar3.jpg'
        ],
            ['jenis_barang' => 'Celana Panjang',
            'bahan' => 'Katun',
            'ukuran' => 'XL',
            'warna' => 'Hitam',
            'merk' => 'H&M',
            'harga' => '150.000',
            'gambar' => 'gambar4.jpg'
        ],
            ['jenis_barang' => 'Hoodie',
            'bahan' => 'Fleece',
            'ukuran' => 'L',
            'warna' => 'Pink',
            'merk' => 'Kemengski',
            'harga' => '350.000',
            'gambar' => 'gambar5.jpg'
        ],
            ['jenis_barang' => 'Jaket Bomber',
            'bahan' => 'Denim',
            'ukuran' => 'XL',
            'warna' => 'Hitam',
            'merk' => 'Zara',
            'harga' => '200.000',
            'gambar' => 'gambar6.jpg'
        ]
            ]
        );
    }
}
