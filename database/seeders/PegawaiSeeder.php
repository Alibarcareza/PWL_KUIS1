<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            ['nama_pegawai' => 'Tzelginia',
            'alamat' => 'Sidoarjo',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '082231464030',
            'Role' => 'Admin',
            'gambar' => 'team-member-01.jpg'
        ],

        ['nama_pegawai' => 'Ali Reza',
        'alamat' => 'Probolinggo',
        'jenis_kelamin' => 'Laki-Laki',
        'no_hp' => '087676548902',
        'Role' => 'Produksi',
        'gambar' => 'team-member-02.jpg'
        ],

        ['nama_pegawai' => 'Rama',
            'alamat' => 'Surabaya',
            'jenis_kelamin' => 'Laki-Laki',
            'no_hp' => '089645321444',
            'Role' => 'Manajer',
            'gambar' => 'team-member-03.jpg'
         ] ,
         ['nama_pegawai' => 'Hana',
         'alamat' => 'Gresik',
         'jenis_kelamin' => 'Perempuan',
         'no_hp' => '081637456392',
         'Role' => 'Sales',
         'gambar' => 'baner-right-image-01.jpg'
      ] ,
      ['nama_pegawai' => 'Alex',
      'alamat' => 'Jakarta',
      'jenis_kelamin' => 'Laki-Laki',
      'no_hp' => '087679043621',
      'Role' => 'Design',
      'gambar' => 'baner-right-image-02.jpg'
     ]       
     ]
        );
    }
}
