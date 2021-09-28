<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokJenisAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelompok_jenis_anggaran')->insert([
            [
                'id'    => 41,
                'nama'  => 'Pendapatan Asli Desa',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'id'    => 42,
                'nama'  => 'Pendapatan transfer',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'id'    => 43,
                'nama'  => 'Pendapatan Lain-lain',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            [
                'id'    => 51,
                'nama'  => 'BIDANG PENYELENGGARAN PEMERINTAHAN DESA',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 52,
                'nama'  => 'BIDANG PELAKSANAAN PEMBANGUNAN DESA',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 53,
                'nama'  => 'BIDANG PEMBINAAN KEMASYARAKATAN',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 54,
                'nama'  => 'BIDANG PEMBERDAYAAN MASYARAKAT',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 55,
                'nama'  => 'BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 61,
                'nama'  => 'Penerimaan Biaya',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'    => 62,
                'nama'  => 'Pengeluaran Biaya',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
