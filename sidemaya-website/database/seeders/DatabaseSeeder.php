<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Datetime;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('documents')->insert([
             'identifier' => '01/KU-01/III-2024',
             'version' => '1',
             'category' => 'Surat Keterangan Usaha',
             'status' => 'Selesai',
             'notes' => 'Sudah selesai ya',
             'filename' => '1709362043_[Alex Purwoto]Surat-Keterangan-Usaha.docx',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        DB::table('documents')->insert([
             'identifier' => '',
             'version' => '1',
             'category' => 'Surat Keterangan Tidak Mampu',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => '1709359820_[Alex Purwoto]Surat-Keterangan-Tidak-Mampu.doc',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        DB::table('documents')->insert([
             'identifier' => '',
             'version' => '1',
             'category' => 'Formulir Kartu Keluarga',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => '1709958721_[Alex Purwoto]Formulir-Kartu-Keluarga.pdf',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        DB::table('documents')->insert([
             'identifier' => '',
             'version' => '1',
             'category' => 'Formulir Permohonan KTP',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => '1709958758_[Alex Purwoto]Formulir-Permohonan-KTP.pdf',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        DB::table('documents')->insert([
             'identifier' => '',
             'version' => '1',
             'category' => 'Surat Keterangan Domisili',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => '1709958844_[Alex Purwoto]Surat-Keterangan-Domisili.doc',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        DB::table('documents')->insert([
             'identifier' => '',
             'version' => '1',
             'category' => 'Tidak Boleh Muncul',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => 'TidakBolehMuncul.doc',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '3',
        ]);
    }
}
