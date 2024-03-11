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

        $uuid = "a333424d-0cbb-497c-9e8f-fe556f8faef1";
        DB::table('documents')->insert([
             'id' => 1,
             'uuid' => $uuid,
             'identifier' => '01/KU-01/III-2024',
             'version' => '1',
             'category' => 'Surat Keterangan Usaha',
             'status' => 'Selesai',
             'notes' => 'Sudah selesai ya',
             'filename' => "${uuid}.docx",
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        $uuid = Str::uuid();
        DB::table('documents')->insert([
             'id' => 2,
             'uuid' => $uuid,
             'identifier' => '',
             'version' => '1',
             'category' => 'Surat Keterangan Tidak Mampu',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => "${uuid}.doc",
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        $uuid = Str::uuid();
        DB::table('documents')->insert([
             'id' => 3,
             'uuid' => $uuid,
             'identifier' => '',
             'version' => '1',
             'category' => 'Formulir Kartu Keluarga',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => "${uuid}.pdf",
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        $uuid = Str::uuid();
        DB::table('documents')->insert([
             'id' => 4,
             'uuid' => $uuid,
             'identifier' => '',
             'version' => '1',
             'category' => 'Formulir Permohonan KTP',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => "${uuid}.pdf",
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        $uuid = Str::uuid();
        DB::table('documents')->insert([
             'id' => 5,
             'uuid' => $uuid,
             'identifier' => '',
             'version' => '1',
             'category' => 'Surat Keterangan Domisili',
             'status' => 'Proses',
             'notes' => 'Tolong proses ya',
             'filename' => "${uuid}.doc",
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '2',
        ]);

        $uuid = Str::uuid();
        DB::table('documents')->insert([
             'id' => 6,
             'uuid' => $uuid,
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
