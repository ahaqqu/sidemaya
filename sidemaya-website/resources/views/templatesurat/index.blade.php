<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Formulir Pembuatan Dokumen') }}
            </h2>
    </x-slot>
    <!--Container-->

    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dokumen Layanan Umum Warga') }}
                </h3>
        </div>
    </header>
            <ul>
                <li>Surat Keterangan Tidak Mampu. <a href="{{ route('download', 'surat_keterangan_tidak_mampu') }}" download>Download</a></li>
                <li>Surat Keterangan Usaha. <a href="{{ route('download', 'surat_keterangan_usaha') }}" download>Download</a></li>
            </ul>



        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dokumen Layanan Administrasi Warga') }}
                </h3>
                <ul>
                    <li>Formulir Kartu Keluarga. <a href="{{ route('download', 'surat_kartu_keluarga') }}" download>Download</a></li>
                    <li>Formulir Permohonan KTP. <a href="{{ route('download', 'surat_permohonan_ktp') }}" download>Download</a></li>
                    <li>Surat Keterangan Domisili. <a href="{{ route('download', 'surat_keterangan_domisili') }}" download>Download</a></li>
        </ul>
        </div>


    <!--/container-->





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</x-app-layout>
