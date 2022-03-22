<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            ['nama_sup' => 'Aisyah Aini',
            'alamat' => 'Surabaya',
            'no_hp' => '081786444232',
            ],
            ['nama_sup' => 'Rizki Andi',
            'alamat' => 'Sidoarjo',
            'no_hp' => '089997689001',
            ],
            ['nama_sup' => 'Ahmad Badawi',
            'alamat' => 'Pasuruan',
            'no_hp' => '085678432156',
             ]
        ]
        );
    }
}
