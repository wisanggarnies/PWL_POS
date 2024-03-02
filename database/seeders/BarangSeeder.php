<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' =>1,
                'kategori_id'=>1,
                'barang_kode'=> 'br_1',
                'barang_nama'=> 'Roma Kelapa',
                'harga_beli'=>16000,
                'harga_jual'=>16500,
            ],
            [
                'barang_id' =>2,
                'kategori_id'=>1,
                'barang_kode'=> 'br_2',
                'barang_nama'=> 'Monde',
                'harga_beli'=>60000,
                'harga_jual'=>62000,
            ],
            [
                'barang_id' =>3,
                'kategori_id'=>2,
                'barang_kode'=> 'br_3',
                'barang_nama'=> 'Lays',
                'harga_beli'=>19000,
                'harga_jual'=>20000,
            ],
            [
                'barang_id' =>4,
                'kategori_id'=>2,
                'barang_kode'=> 'br_4',
                'barang_nama'=> 'Potato',
                'harga_beli'=>19000,
                'harga_jual'=>20000,
            ],
            [
                'barang_id' =>5,
                'kategori_id'=>3,
                'barang_kode'=> 'br_5',
                'barang_nama'=> 'Mizone',
                'harga_beli'=>6500,
                'harga_jual'=>7000,
            ],
            [
                'barang_id' =>6,
                'kategori_id'=>3,
                'barang_kode'=> 'br_6',
                'barang_nama'=> 'Tebs',
                'harga_beli'=>6500,
                'harga_jual'=>7000,
            ],
            [
                'barang_id' =>7,
                'kategori_id'=>4,
                'barang_kode'=> 'br_7',
                'barang_nama'=> 'Fried Rice',
                'harga_beli'=>8000,
                'harga_jual'=>10000,
            ],
            [
                'barang_id' =>8,
                'kategori_id'=>4,
                'barang_kode'=> 'br_8',
                'barang_nama'=> 'Sandwitch',
                'harga_beli'=>8500,
                'harga_jual'=>10000,
            ],
            [
                'barang_id' =>9,
                'kategori_id'=>5,
                'barang_kode'=> 'br_9',
                'barang_nama'=> 'Mentos',
                'harga_beli'=>13000,
                'harga_jual'=>15000,
            ],
            [
                'barang_id' =>10,
                'kategori_id'=>5,
                'barang_kode'=> 'br_10',
                'barang_nama'=> 'Sugus',
                'harga_beli'=>12500,
                'harga_jual'=>15000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
