<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Persetujuan Surat') }}
        </h2>
    </x-slot>

    @if (\Session::has('success'))
        <div class="pt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section">
                            {!! \Session::get('success') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (\Session::has('error'))
        <div class="pt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section" style="color:red">
                            {!! \Session::get('error') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="section">

                            @php
                            echo <<<EOL
                                <button onclick="location.href='../documents/process/$document->uuid'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Unduh dokumen yang diajukan pemohon
                                </button>
                            EOL;
                            @endphp
                            <br><br>
                            <label for="nama">Jenis Surat</label><br>
                            <input type="text" id="nama" name="nama" style="color:black; background-color:lightgrey" readonly value="{{ $document->category }}"><br><br>
                            <label for="nama">Pemohon</label><br>
                            <input type="text" id="nama" name="nama" style="color:black; background-color:lightgrey" readonly value="{{ $created_by->name }}"><br><br>
                            <label for="nama">Waktu Mohon</label><br>
                            <input type="text" id="nama" name="nama" style="color:black; background-color:lightgrey" readonly value="{{ $document->created_at }}"><br>


                            @auth
                            <div class="mt-4">
                                <form action="{{ route('documentsfinal.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     @php
                                    echo <<<EOL
                                    <input type="hidden" name="uuid" value="$document->uuid">
                                    EOL;

                                   if($document->status == "Proses") {
                                       echo <<<EOL
                                        <label for="nomorsurat">Nomor Surat</label><br>
                                        <input type="text" id="nomorsurat" name="nomorsurat" style="color:black;"><br><br>
                                        <label for="file">Lampirkan Dokumen yang Disetujui</label><br>
                                        <input type="file" name="file"><br><br>


                                        EOL;
                                    } else {
                                       echo <<<EOL
                                        <label for="nomorsurat">Nomor Surat</label><br>
                                        <input type="text" id="nomorsurat" name="nomorsurat" style="color:black; background-color:lightgrey" readonly value="$document->identifier"><br><br>
                                        <button onclick="location.href='../documents/final/$document->uuid'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            Unduh dokumen yang telah disetujui
                                        </button><br><br>
                                        EOL;
                                    }

                                     @endphp

                                    @if ($document->status == "Proses")
                                     <x-primary-button>
                                         {{ __('Kirim') }}
                                     </x-primary-button>
                                     @endif
                                </form>
                            </div>
                            @endauth
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
