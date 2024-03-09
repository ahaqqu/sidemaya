<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dokumen Layanan Umum Warga') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Surat Keterangan Usaha") }}
                    <br><br>
                    @foreach ($files1 as $file)
                        @php
                            $parts = explode("/", $file);
                            $name = explode("_", $parts[3], 2);


                            $datetime = new DateTime("@$name[0]");
                            echo $datetime->format('d-m-Y H:i:s');
                        @endphp
                        <button onclick="location.href='../document/{{$file}}'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            @php
                                echo $name[1];
                            @endphp
                        </button>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Surat Keterangan Tidak Mampu") }}
                    <br><br>
                    @foreach ($files2 as $file)
                        @php
                            $parts = explode("/", $file);
                            $name = explode("_", $parts[3], 2);


                            $datetime = new DateTime("@$name[0]");
                            echo $datetime->format('d-m-Y H:i:s');
                        @endphp
                        <button onclick="location.href='../document/{{$file}}'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            @php
                                echo $name[1];
                            @endphp
                        </button>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8">
    </dv>
    <div class="pt-8">
    </dv>

    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dokumen Layanan Administrasi Warga') }}
            </h2>
        </div>
    </header>

    <div class="pt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Formulir Kartu Keluarga") }}
                        <br><br>
                        @foreach ($files3 as $file)
                            @php
                                $parts = explode("/", $file);
                                $name = explode("_", $parts[3], 2);


                                $datetime = new DateTime("@$name[0]");
                                echo $datetime->format('d-m-Y H:i:s');
                            @endphp
                            <button onclick="location.href='../document/{{$file}}'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                @php
                                    echo $name[1];
                                @endphp
                            </button>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Formulir Permohonan KTP") }}
                        <br><br>
                        @foreach ($files4 as $file)
                            @php
                                $parts = explode("/", $file);
                                $name = explode("_", $parts[3], 2);


                                $datetime = new DateTime("@$name[0]");
                                echo $datetime->format('d-m-Y H:i:s');
                            @endphp
                            <button onclick="location.href='../document/{{$file}}'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                @php
                                    echo $name[1];
                                @endphp
                            </button>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Surat Keterangan Domisili") }}
                        <br><br>
                        @foreach ($files5 as $file)
                            @php
                                $parts = explode("/", $file);
                                $name = explode("_", $parts[3], 2);


                                $datetime = new DateTime("@$name[0]");
                                echo $datetime->format('d-m-Y H:i:s');
                            @endphp
                            <button onclick="location.href='../document/{{$file}}'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                @php
                                    echo $name[1];
                                @endphp
                            </button>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br><br>
</x-app-layout>
