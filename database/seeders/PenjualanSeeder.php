<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id'=>1,
                'user_id'=>3,
                'pembeli'=>'Customer1',
                'penjualan_kode'=>1,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>2,
                'user_id'=>3,
                'pembeli'=>'Customer2',
                'penjualan_kode'=>2,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>3,
                'user_id'=>3,
                'pembeli'=>'Customer3',
                'penjualan_kode'=>3,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>4,
                'user_id'=>3,
                'pembeli'=>'Customer4',
                'penjualan_kode'=>4,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>5,
                'user_id'=>3,
                'pembeli'=>'Customer5',
                'penjualan_kode'=>5,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>6,
                'user_id'=>3,
                'pembeli'=>'Customer6',
                'penjualan_kode'=>6,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>7,
                'user_id'=>3,
                'pembeli'=>'Customer7',
                'penjualan_kode'=>7,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>8,
                'user_id'=>3,
                'pembeli'=>'Customer8',
                'penjualan_kode'=>8,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>9,
                'user_id'=>3,
                'pembeli'=>'Customer9',
                'penjualan_kode'=>9,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
            [
                'penjualan_id'=>10,
                'user_id'=>3,
                'pembeli'=>'Customer10',
                'penjualan_kode'=>10,
                'penjualan_tanggal'=> '2024-3-2 21:15',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
