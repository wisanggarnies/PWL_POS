<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'biskuit',
                'kategori_nama' => 'Biskuit',
            ],
            [
                'kategori_id' =>2,
                'kategori_kode' => 'chips',
                'kategori_nama' => 'Chips',
            ],
            [
                'kategori_id' =>3,
                'kategori_kode' => 'drink',
                'kategori_nama' => 'Drink',
            ],
            [
                'kategori_id' =>4,
                'kategori_kode' => 'food',
                'kategori_nama' => 'Food',
            ],
            [
                'kategori_id' =>5,
                'kategori_kode' => 'candy',
                'kategori_nama' => 'Candy',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
