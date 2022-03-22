<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            ['nama_pelanggan' => 'Angel',
            'alamat' => 'Makasar',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '087678903521',
        ],
        ['nama_pelanggan' => 'Clay',
        'alamat' => 'Palembang',
        'jenis_kelamin' => 'Laki-Laki',
        'no_hp' => '085806497978',
     ]
        ]
    );
    }
}
