<x-app-layout>
    <?php

    ?>
    <!--Container-->
    <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <title>Ajukan Surat</title>
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="category-filter">
                <div class="jumbotron text-center">
                    <h1 class="text-black" style="font-size: 30px;"><strong>Template Surat</strong></h1>
                </div>

                <br><br>

                <div class="text-black">
                <table>
                <tr>
                <td><h2><strong>Dokumen Layanan Umum</strong></h2></td>
                </tr>
                        <tr>
                            <td>Surat Keterangan Tidak Mampu</td>
                            <td>
                                <a href="{{ route('file.download', ['directory' => 'layanan-umum', 'filename' => 'Surat-Keterangan-Tidak-Mampu.doc']) }}" class="text-blue-500 hover:text-blue-700" download>
                                    <x-primary-button>
                                        {{ __('Unduh') }}
                                    </x-primary-button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Surat Keterangan Usaha</td>
                            <td>
                                <a href="{{ route('file.download', ['directory' => 'layanan-umum', 'filename' => 'Surat-Keterangan-Usaha.docx']) }}" class="text-blue-500 hover:text-blue-700" download>
                                    <x-primary-button>
                                        {{ __('Unduh') }}
                                    </x-primary-button>
                                </a>
                            </td>
                        </tr>

                </div><br><br>

                <div class="text-black">
                    <tr><td><br><br></td></tr>
                    <tr>
                    <td><h2><strong>Dokumen Layanan Khusus</strong></h2></td>
                    </tr>
                        <tr>
                            <td>Formulir Kartu Keluarga</td>
                            <td>
                                <a href="{{ route('file.download', ['directory' => 'layanan-khusus', 'filename' => 'formulir-kartu-keluarga.pdf']) }}" class="text-blue-500 hover:text-blue-700" download>
                                    <x-primary-button>
                                        {{ __('Unduh') }}
                                    </x-primary-button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Formulir Permohonan KTP</td>
                            <td>
                                <a href="{{ route('file.download', ['directory' => 'layanan-khusus', 'filename' => 'formulir-permohonan-ktp.pdf']) }}" class="text-blue-500 hover:text-blue-700" download>
                                    <x-primary-button>
                                        {{ __('Unduh') }}
                                    </x-primary-button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Surat Keterangan Domisili</td>
                            <td>
                                <a href="{{ route('file.download', ['directory' => 'layanan-khusus', 'filename' => 'surat-keterangan-domisili.doc']) }}" class="text-blue-500 hover:text-blue-700" download>
                                    <x-primary-button>
                                        {{ __('Unduh') }}
                                    </x-primary-button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <br>

            <div><br><br>
            </div>
            </form>
            <span style="color: red;">*Silahkan mengunduh surat sesuai dengan kebutuhan anda.</span><br><br>


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
