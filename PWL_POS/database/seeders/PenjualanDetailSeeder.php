<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Detail untuk transaksi penjualan 1
            ['detail_id' => 1, 'barang_id' => 1, 'penjualan_id' => 1, 'harga' => 3500000, 'jumlah' => 1],
            ['detail_id' => 2, 'barang_id' => 2, 'penjualan_id' => 1, 'harga' => 2800000, 'jumlah' => 1],
            ['detail_id' => 3, 'barang_id' => 3, 'penjualan_id' => 1, 'harga' => 1750000, 'jumlah' => 1],

            // Detail untuk transaksi penjualan 2
            ['detail_id' => 4, 'barang_id' => 4, 'penjualan_id' => 2, 'harga' => 1200000, 'jumlah' => 2],
            ['detail_id' => 5, 'barang_id' => 5, 'penjualan_id' => 2, 'harga' => 250000, 'jumlah' => 3],
            ['detail_id' => 6, 'barang_id' => 6, 'penjualan_id' => 2, 'harga' => 3500000, 'jumlah' => 1],

            // Detail untuk transaksi penjualan 3
            ['detail_id' => 7, 'barang_id' => 7, 'penjualan_id' => 3, 'harga' => 7500000, 'jumlah' => 1],
            ['detail_id' => 8, 'barang_id' => 8, 'penjualan_id' => 3, 'harga' => 600000, 'jumlah' => 2],
            ['detail_id' => 9, 'barang_id' => 9, 'penjualan_id' => 3, 'harga' => 20000, 'jumlah' => 5],

            // Detail untuk transaksi penjualan 4
            ['detail_id' => 10, 'barang_id' => 10, 'penjualan_id' => 4, 'harga' => 15000, 'jumlah' => 10],
            ['detail_id' => 11, 'barang_id' => 11, 'penjualan_id' => 4, 'harga' => 350000, 'jumlah' => 2],
            ['detail_id' => 12, 'barang_id' => 12, 'penjualan_id' => 4, 'harga' => 5000, 'jumlah' => 3],

            // Detail untuk transaksi penjualan 5
            ['detail_id' => 13, 'barang_id' => 13, 'penjualan_id' => 5, 'harga' => 8000, 'jumlah' => 4],
            ['detail_id' => 14, 'barang_id' => 14, 'penjualan_id' => 5, 'harga' => 250000, 'jumlah' => 1],
            ['detail_id' => 15, 'barang_id' => 15, 'penjualan_id' => 5, 'harga' => 4000, 'jumlah' => 6],

            // Detail untuk transaksi penjualan 6
            ['detail_id' => 16, 'barang_id' => 6, 'penjualan_id' => 6, 'harga' => 3500000, 'jumlah' => 2],
            ['detail_id' => 17, 'barang_id' => 7, 'penjualan_id' => 6, 'harga' => 7500000, 'jumlah' => 1],
            ['detail_id' => 18, 'barang_id' => 8, 'penjualan_id' => 6, 'harga' => 600000, 'jumlah' => 3],

            // Detail untuk transaksi penjualan 7
            ['detail_id' => 19, 'barang_id' => 9, 'penjualan_id' => 7, 'harga' => 20000, 'jumlah' => 5],
            ['detail_id' => 20, 'barang_id' => 10, 'penjualan_id' => 7, 'harga' => 15000, 'jumlah' => 10],
            ['detail_id' => 21, 'barang_id' => 11, 'penjualan_id' => 7, 'harga' => 350000, 'jumlah' => 1],

            // Detail untuk transaksi penjualan 8
            ['detail_id' => 22, 'barang_id' => 12, 'penjualan_id' => 8, 'harga' => 5000, 'jumlah' => 5],
            ['detail_id' => 23, 'barang_id' => 13, 'penjualan_id' => 8, 'harga' => 8000, 'jumlah' => 4],
            ['detail_id' => 24, 'barang_id' => 14, 'penjualan_id' => 8, 'harga' => 250000, 'jumlah' => 2],

            // Detail untuk transaksi penjualan 9
            ['detail_id' => 25, 'barang_id' => 15, 'penjualan_id' => 9, 'harga' => 4000, 'jumlah' => 10],
            ['detail_id' => 26, 'barang_id' => 6, 'penjualan_id' => 9, 'harga' => 3500000, 'jumlah' => 1],
            ['detail_id' => 27, 'barang_id' => 7, 'penjualan_id' => 9, 'harga' => 7500000, 'jumlah' => 1],

            // Detail untuk transaksi penjualan 10
            ['detail_id' => 28, 'barang_id' => 8, 'penjualan_id' => 10, 'harga' => 600000, 'jumlah' => 2],
            ['detail_id' => 29, 'barang_id' => 9, 'penjualan_id' => 10, 'harga' => 20000, 'jumlah' => 7],
            ['detail_id' => 30, 'barang_id' => 10, 'penjualan_id' => 10, 'harga' => 15000, 'jumlah' => 6],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
