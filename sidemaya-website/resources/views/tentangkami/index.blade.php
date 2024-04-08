<x-app-layout>
    <?php

    ?>
    <!--Container-->

    <head>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <title>Tentang Kami</title>
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="category-filter">

                <div class="col-span-1">

                    <div class="container w-full">
                        <img src="{{ asset('images/Tentang.png') }}" alt="Header Image" style="width: 100%; height: auto;">
                    </div>
                    <br>
                    <div class="jumbotron text-center">
                        <h1 class="text-black" style="font-size: 30px;"><strong>Statistik Sidemaya</strong></h1>
                    </div>

                    <br><br>

                    <h1 class="text-center text-black" style="font-size: 24px;"><strong>VISI</strong></h1>
                    <p class="text-center text-green-800 font-bold">Menjadikan Manud Jaya sebagai komunitas digital yang inovatif dan berkembang dengan lingkungan yang sehat dan komunitas yang sehat.</p>
                    <br><br>

                    <h1 class="text-center text-black" style="font-size: 24px;"><strong>MISI</strong></h1>

                    <div class="grid grid-cols-2 gap-8">
                        <div class="col-span-1">
                            <img src="{{ asset('images/Tentang2.png') }}" alt="Header Image" style="width: 100%; height: auto;">
                        </div>

                        <div class="text-left">
                            <p class="text-green-800 font-bold">1. Meningkatkan kualitas pendidikan dan keterampilan masyarakat.</p>
                            <p class="text-green-800 font-bold">2. Mengoptimalkan potensi lokal.</p>
                            <p class="text-green-800 font-bold">3. Meningkatkan kualitas layanan publik melalui digitalisasi.</p>
                            <p class="text-green-800 font-bold">4. Membangun tata kelola yang baik untuk kemajuan daerah dan transparan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
