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
            <h1 class="text-black"><strong>Ajukan Surat</strong></h1>
</div>

            <br><br>


        <h2>Jenis Surat</h2>
        <select id="jenissurat" name="jenissurat" placeholder="Pilih..." class="form-control klasifikasi">
            <option value="" disabled selected>Pilih Jenis Surat</option>
            <option value="jenis1">Surat Keterangan Tidak Mampu</option>
            <option value="jenis2">Surat Keterangan Usaha</option>
            <option value="jenis2">Surat Keterangan Domisili</option>
            <option value="jenis2">Formulir Permohonan KTP</option>
            <option value="jenis2">Formulir Kartu Keluarga</option>
        </select>
    </div>
    <!-- Formulir Upload -->
    <form action="{{ route('ajukansurat.upload') }}" method="post" enctype="multipart/form-data">

            <div class="m-5">
                Pilih file untuk diunggah:
            </div>

        <div class="form-group">
            <input type="file" name="file" id="file" required class="text-center m-5" class="custom-file-input">
        </div>
        <div class="form-group col-md-4 p-5">
        <x-primary-button>
                                         {{ __('Ajukan') }}
                                     </x-primary-button>
        </div>

        <br><br>
                            <label for="nama">Jenis Surat</label><br>
                            <select id="jenissurat" name="jenissurat" placeholder="Pilih..." class="form-control klasifikasi">
            <option value="" disabled selected>Pilih Jenis Surat</option>
            <option value="jenis1">Surat Keterangan Tidak Mampu</option>
            <option value="jenis2">Surat Keterangan Usaha</option>
        </select>
                            <input type="text" id="nama" name="nama" style="color:black; background-color:lightgrey" readonly value=""><br><br>
                            <label for="nama">Pemohon</label><br>
                            <input type="text" id="nama" name="nama" style="color:black; background-color:lightgrey" readonly value=""><br><br>

    </form>
</x-app-layout>
