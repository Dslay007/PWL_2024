<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Barang dari Supplier 1
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'TV 42 inch', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Kulkas 2 Pintu', 'harga_beli' => 2500000, 'harga_jual' => 2800000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Sofa Minimalis', 'harga_beli' => 1500000, 'harga_jual' => 1750000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Meja Kerja', 'harga_beli' => 1000000, 'harga_jual' => 1200000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 200000, 'harga_jual' => 250000],
            
            // Barang dari Supplier 2
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'BRG006', 'barang_nama' => 'AC 1 PK', 'harga_beli' => 3200000, 'harga_jual' => 3500000],
            ['barang_id' => 7, 'kategori_id' => 1, 'barang_kode' => 'BRG007', 'barang_nama' => 'Laptop 14 inch', 'harga_beli' => 7000000, 'harga_jual' => 7500000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kursi Kantor', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Biskuit Coklat', 'harga_beli' => 10000, 'harga_jual' => 15000],

            // Barang dari Supplier 3
            ['barang_id' => 11, 'kategori_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 300000, 'harga_jual' => 350000],
            ['barang_id' => 12, 'kategori_id' => 5, 'barang_kode' => 'BRG012', 'barang_nama' => 'Pulpen Gel', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 14, 'kategori_id' => 2, 'barang_kode' => 'BRG014', 'barang_nama' => 'Rak Buku', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Spidol Hitam', 'harga_beli' => 2500, 'harga_jual' => 4000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
