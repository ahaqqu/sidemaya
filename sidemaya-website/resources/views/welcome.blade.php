<x-app-layout>

    <x-slot name="header">
                <!-- Landing Page Section -->
                <div class="landing-page" style="background-image: url('backgrounds/your-background-image.jpg'); height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
            <div class="container">
                <div class="jumbotron text-center p-5">
                    <h1 class="text-white font-bold text-4xl md:text-6xl">Selamat Datang di Layanan SIDEMAYA</h1>
                    <p class="text-white mt-4 text-lg md:text-xl">Solusi terpadu yang dirancang untuk mendukung pemerintahan desa, meningkatkan partisipasi masyarakat, dan memfasilitasi berbagai kegiatan di tingkat desa.</p>
                    <div class="mt-8">
                        <!-- Button untuk menarik perhatian pengguna, misalnya untuk mengarahkan mereka ke bagian tertentu dari situs -->
                        <a href="#tentangkami" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Landing Page Section -->

        <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>

</x-app-layout>
