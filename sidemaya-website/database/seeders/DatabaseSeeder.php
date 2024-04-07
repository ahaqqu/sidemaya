<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Datetime;

use App\Models\User;
use App\Models\Document;
use App\Models\LaporanKeuangan;

use Stephenjude\FilamentBlog\Models\Post;
use Stephenjude\FilamentBlog\Models\Author;
use Stephenjude\FilamentBlog\Models\Category;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::updateOrInsert(['id' => 1],[
             'id' => 1,
             'name' => "Admin",
             'email' => 'admin@sidemaya.com',
             'password' => Hash::make('password'),
             'nik' => '77777777',
             'role' => 'ADMIN'
        ]);

        User::updateOrInsert(['id' => 2],[
             'id' => 2,
             'name' => "Alex Purwoto",
             'email' => 'alex.purwoto@gmail.com',
             'password' => Hash::make('password'),
             'nik' => '1234567890'
        ]);

        User::updateOrInsert(['id' => 3],[
             'id' => 3,
             'name' => "Susi Hoffmann",
             'email' => 'susi.hoffmann@gmail.com',
             'password' => Hash::make('password'),
             'nik' => '33333333'
        ]);

        $uuid = "a333424d-0cbb-497c-9e8f-fe556f8faef1";
        Document::updateOrInsert(['uuid' => $uuid],[
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
        Document::updateOrInsert(['uuid' => $uuid],[
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
        Document::updateOrInsert(['uuid' => $uuid],[
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
        Document::updateOrInsert(['uuid' => $uuid],[
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
        Document::updateOrInsert(['uuid' => $uuid],[
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

        $uuid = "5d4fac7f-4eb2-483f-9bfb-5b1786bb4769";
        Document::updateOrInsert(['uuid' => $uuid],[
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

        $uuid = "ad7ed154-bb9a-43ff-a3fb-633150c5d5b2";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 1,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2023',
             'month' => '9',
        ]);

        $uuid = "b2dacfbb-ab66-4c83-8e46-d1730d8db147";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 2,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2023',
             'month' => '10',
        ]);

        $uuid = "62359ac9-5bb1-460a-a5e6-24d04c67f4fc";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 3,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2023',
             'month' => '11',
        ]);

        $uuid = "4423b5e9-9525-470f-b79a-4537f0699f02";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 4,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2023',
             'month' => '12',
        ]);

        $uuid = "c53855ef-b211-4673-acfb-7fcccae99eab";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 5,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2024',
             'month' => '1',
        ]);

        $uuid = "c2941ebe-df56-4aac-99c3-1b60d24fda7b";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 6,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2024',
             'month' => '2',
        ]);

        $uuid = "fd64a661-28ec-40e2-85d2-688b25bdc3dd";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 7,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2024',
             'month' => '3',
        ]);

        $uuid = "3bb9a337-ecc3-4881-8434-bcf9edd1388c";
        LaporanKeuangan::updateOrInsert(['uuid' => $uuid],[
             'id' => 8,
             'uuid' => $uuid,
             'filename' => "${uuid}.pdf",
             'created_at' => Carbon::now()->toDateTimeString(),
             'created_by' => '1',
             'year' => '2024',
             'month' => '4',
        ]);

        Author::updateOrInsert(['id' => 1],[
             'id' => 1,
             'name' => 'admin',
             'email' => 'admin@sidemaya.com',
             'bio' => '<p>Admin SIDEMAYA</p>',
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        Category::updateOrInsert(['id' => 1],[
             'id' => 1,
             'name' => 'Kegiatan',
             'slug' => 'kegiatan',
             'description' => '<p>Kegiatan</p>',
             'is_Visible' => 1,
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        Category::updateOrInsert(['id' => 2],[
             'id' => 2,
             'name' => 'Program',
             'slug' => 'program',
             'description' => '<p>Program</p>',
             'is_Visible' => 1,
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        Post::updateOrInsert(['id' => 1],[
             'id' => 1,
             'blog_author_id' => 1,
             'blog_category_id' => 1,
             'title' => 'Vitamin Anak',
             'slug' => 'vitamin-anak',
             'excerpt' => "Tempat: Puskesmas Desa Manud Jaya\nWaktu: 20 April 2024",
             'banner' => 'blog/01HTVX07NKXGJ1X0ES9T67SESM.png',
             'content' => '<p><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;Screenshot 2024-03-31 211425.png&quot;,&quot;filesize&quot;:520334,&quot;height&quot;:578,&quot;href&quot;:&quot;http://localhost/storage/m9gdpCai2YfNvhfszDamJmNSAEGL5mwCGxvJPA6z.png&quot;,&quot;url&quot;:&quot;http://localhost/storage/m9gdpCai2YfNvhfszDamJmNSAEGL5mwCGxvJPA6z.png&quot;,&quot;width&quot;:843}" data-trix-content-type="image/png" data-trix-attributes="{&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--png"><a href="http://localhost/storage/m9gdpCai2YfNvhfszDamJmNSAEGL5mwCGxvJPA6z.png"><img src="http://localhost/storage/m9gdpCai2YfNvhfszDamJmNSAEGL5mwCGxvJPA6z.png" width="843" height="578"><figcaption class="attachment__caption"><span class="attachment__name">Screenshot 2024-03-31 211425.png</span> <span class="attachment__size">508.14 KB</span></figcaption></a></figure><strong>Tempat:</strong> Puskesmas Desa Manud Jaya<br><strong>Waktu:</strong> 20 April 2024</p><p>Hello</p>',
             'published_at' => new Carbon('2024-04-07'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        Post::updateOrInsert(['id' => 2],[
             'id' => 2,
             'blog_author_id' => 1,
             'blog_category_id' => 1,
             'title' => 'Pemilu 2024',
             'slug' => 'pemilu-2024',
             'excerpt' => "Tempat: Kantor Desa Manud Jaya\nWaktu: 13 Maret 2024",
             'banner' => 'blog/01HTVZHK976NCTM6JKFCZJRERK.webp',
             'content' => '<p><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/webp&quot;,&quot;filename&quot;:&quot;pemilu-2024_1707824465.webp&quot;,&quot;filesize&quot;:32842,&quot;href&quot;:&quot;http://localhost/storage/tNLeh3zNmXvre3CcRn1LoD7oz18nKQR05gT8xBms.webp&quot;,&quot;url&quot;:&quot;http://localhost/storage/tNLeh3zNmXvre3CcRn1LoD7oz18nKQR05gT8xBms.webp&quot;}" data-trix-content-type="image/webp" class="attachment attachment--file attachment--webp"><a href="http://localhost/storage/tNLeh3zNmXvre3CcRn1LoD7oz18nKQR05gT8xBms.webp"><img src="http://localhost/storage/tNLeh3zNmXvre3CcRn1LoD7oz18nKQR05gT8xBms.webp" width="860" height="484"><figcaption class="attachment__caption"><span class="attachment__name">pemilu-2024_1707824465.webp</span> <span class="attachment__size">32.07 KB</span></figcaption></a></figure></p><p>Tempat: Kantor Desa Manud Jaya<br>Waktu: 13 Maret 2024<br><br>Silakan Gunakan Hak Pilih Anda</p>',
             'published_at' => new Carbon('2024-03-13'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
        ]);

    }
}
