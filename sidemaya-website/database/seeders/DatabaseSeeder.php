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

        DB::table('users')->insert([
             'id' => 1,
             'name' => "Admin",
             'email' => 'admin@sidemaya.com',
             'password' => Hash::make('password'),
             'nik' => '77777777',
             'role' => 'ADMIN'
        ]);

        DB::table('users')->insert([
             'id' => 2,
             'name' => "Alex Purwoto",
             'email' => 'alex.purwoto@gmail.com',
             'password' => Hash::make('password'),
             'nik' => '1234567890'
        ]);

        DB::table('users')->insert([
             'id' => 3,
             'name' => "Susi Hoffmann",
             'email' => 'susi.hoffmann@gmail.com',
             'password' => Hash::make('password'),
             'nik' => '33333333'
        ]);




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

        $uuid = "883d5365-f2c7-4f86-8a91-826e9a867e82";
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

        $uuid = "93ed7790-5249-4760-8579-0efc6f4a6a9d";
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

        $uuid = "2b07237d-2e5f-463c-988f-b815ec7e19e0";
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

        $uuid = "46c676a2-9943-4e1b-a6b8-0cd147aa9f87";
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

        $uuid = "5d4fac7f-4eb2-483f-9bfb-5b1786bb4769 ";
        DB::table('documents')->insert([
             'id' => 6,
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
             'created_by' => '3',
        ]);
    }
}
