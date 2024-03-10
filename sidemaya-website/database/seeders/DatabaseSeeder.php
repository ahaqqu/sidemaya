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
        // \App\Models\User::factory(10)->create();

        DB::table('documents')->insert([
             'uuid' => Str::uuid(),
             'identifier' => '1',
             'version' => '1',
             'category' => 'surat-keterangan-usaha',
             'status' => 'selesai',
             'notes' => 'Sudah selesai ya',
             'filename' => '1709958721_[Alex Purwoto]Formulir-Kartu-Keluarga.pdf',
             'updated_by' => '1',
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'created_at' => Carbon::create('2000', '01', '01')->toDateTimeString(),
             'created_by' => '1',
        ]);
    }
}
