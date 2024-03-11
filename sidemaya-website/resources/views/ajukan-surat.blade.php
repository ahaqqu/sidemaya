<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajukan Surat') }}
        </h2>
    </x-slot>

    <?php
session_start();

// Menampilkan pop-up notifikasi jika file berhasil diunggah
if (isset($_SESSION['upload_success']) && $_SESSION['upload_success']) {
    echo "<script>alert('File berhasil diunggah!');</script>";
    unset($_SESSION['upload_success']); // Menghapus session setelah notifikasi ditampilkan
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Gaya untuk input file */
        .custom-file-input {
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: #4CAF50;
            /* Warna latar belakang yang ingin Anda gunakan */
            color: #fff;
            /* Warna teks */
            border-radius: 4px;
        }

        /* Menyembunyikan input file asli */
        .custom-file-input input {
            display: none;
        }
    </style>
    <title>Ajukan Surat</title>
</head>

<body>
    <div class="jumbotron text-center p-5">
        <h1><strong>Ajukan Surat</strong></h1>
    </div>
    <div class="form-group col-md-4 p-5">
        <h2>Jenis Surat</h2>
        <select id="jenissurat" name="jenissurat" placeholder="Pilih..." class="form-control klasifikasi">
            <option value="" disabled selected>Pilih Jenis Surat</option>
            <option value="jenis1">Surat Keterangan Tidak Mampu</option>
            <option value="jenis2">Surat Keterangan Usaha</option>
        </select>
    </div>
    <!-- Formulir Upload -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>
            <div class="m-5">
                Pilih file untuk diunggah:
            </div>
        </h2>
        <div class="form-group">
            <input type="file" name="file" id="file" required class="text-center m-5" class="custom-file-input">
        </div>
        <div class="form-group col-md-4 p-5">
            <button class="btn btn-warning btn-lg" type="submit" name="submit" class="text-center m-5">Ajukan</button>
            <button class="btn btn-warning btn-lg" type="" name="submit" class="text-center m-5">Lihat</button>
        </div>
    </form>
</body>

</html>
</x-app-layout>
