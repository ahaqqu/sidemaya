<x-app-layout>
<?php
session_start();

// Menampilkan pop-up notifikasi jika file berhasil diunggah
if (isset($_SESSION['upload_success']) && $_SESSION['upload_success']) {
    echo "<script>alert('File berhasil diunggah!');</script>";
    unset($_SESSION['upload_success']); // Menghapus session setelah notifikasi ditampilkan
}
?>
	<!--Container-->

    <title>Ajukan Surat</title>
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
            <div class="jumbotron text-center">
            <h1 class="text-black" style="font-size: 30px;"><strong>Ajukan Surat</strong></h1>
</div>

            <br><br>
        <div class="text-black">
            <h2><strong>Mengajukan Permohonan Surat Baru</strong></h2>
</div>
<div class="form-container">
        <h2>Jenis Surat</h2><br>
        <select id="category" name="category">
            <option value="" disabled selected>Pilih Jenis Surat</option>
            <option value="jenis1">Surat Keterangan Tidak Mampu</option>
            <option value="jenis2">Surat Keterangan Usaha</option>
            <option value="jenis2">Surat Keterangan Domisili</option>
            <option value="jenis2">Formulir Permohonan KTP</option>
            <option value="jenis2">Formulir Kartu Keluarga</option>
        </select>
    </div><br>
    <!-- Formulir Upload -->
    <form action="/uploadsurat" method="post" enctype="multipart/form-data">
    <!-- <form action="{{url('uploadsurat')}}" method="post" enctype="multipart/form-data"> -->
@csrf
<div class="form-container"><br>
            <h2><strong>Upload Dokumen</strong></h2>

            <div class="form-group">
            <input type="file" name="filename" id="filename" required class="form-control custom-file-input">
        </div><br>
        <div class="form-group"><br>
        <x-primary-button>
                                         {{ __('Lihat') }}
                                     </x-primary-button>
        <x-primary-button type="submit">
                                         {{ __('Ajukan Surat') }}
                                     </x-primary-button>

</div>
<div><br><br>
</div>
</form>
<span style="color: red;">*Mohon untuk segera mengambil/mengunduh surat yang sudah selesai agar dapat mengajukan surat lain.</span><br><br>

    <style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .form-group {
        margin-bottom: 10px;
    }
</style>
</x-app-layout>
