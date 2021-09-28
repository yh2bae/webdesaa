<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailJenisAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('detail_jenis_anggaran')->insert([

        // [
        //     'id'    => 411,
        //     'jenis_anggaran_id' => 4,
        //     'kelompok_jenis_anggaran_id' => 41,
        //     'nama'  => 'Hasil Usaha Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],
        
        // [
        //     'id'    => 412,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 41,
        //     'nama'  => 'Hasil Aset Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 413,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 41,
        //     'nama'  => 'Swadaya, Partisipasi dan Gotong Royong',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 414,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 41,
        //     'nama'  => 'Lain-Lain Pendapatan Asli Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 421,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Dana Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 422,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Bagi Hasil Pajak dan Retribusi',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 423,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Alokasi Dana Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 424,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Bantuan Keuangan Provinsi',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 425,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Bantuan Keuangan Kabupaten/Kota',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 431,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 42,
        //     'nama'  => 'Penerimaan dari Hasil Kerjasama Antar Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 432,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 433,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 434,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Hibah dan Sumbangan dari Pihak Ketiga',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 435,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Koreksi Kesalahan Belanja Tahun-tahun Sebelumnya',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 436,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Bunga Bank',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 439,
        //     'jenis_anggaran_id'    => 4,
        //     'kelompok_jenis_anggaran_id'    => 43,
        //     'nama'  => 'Lain-lain Pendapatan Desa Yang Sah',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 511,
        //     'jenis_anggaran_id'    => 5,
        //     'kelompok_jenis_anggaran_id'    => 51,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 521,
        //     'jenis_anggaran_id'    => 5,
        //     'kelompok_jenis_anggaran_id'    => 52,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 531,
        //     'jenis_anggaran_id'    => 5,
        //     'kelompok_jenis_anggaran_id'    => 53,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 541,
        //     'jenis_anggaran_id'    => 5,
        //     'kelompok_jenis_anggaran_id'    => 54,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 551,
        //     'jenis_anggaran_id'    => 5,
        //     'kelompok_jenis_anggaran_id'    => 55,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],
        // [
        //     'id'    => 611,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 61,
        //     'nama'  => 'SILPA Tahun Sebelumnya',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 612,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 61,
        //     'nama'  => 'Pencairan Dana Cadangan',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 613,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 61,
        //     'nama'  => 'Hasil Penjualan Kekayaan Desa Yang Dipisahkan',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 619,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 61,
        //     'nama'  => 'Penerimaan Pembiayaan Lainnya',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 621,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 62,
        //     'nama'  => 'Pembentukan Dana Cadangan',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 622,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 62,
        //     'nama'  => 'Penyertaan Modal Desa',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

        // [
        //     'id'    => 629,
        //     'jenis_anggaran_id'    => 6,
        //     'kelompok_jenis_anggaran_id'    => 62,
        //     'nama'  => 'Pengeluaran Pembiayaan Lainnya',
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ],

       ]);
    }
}
