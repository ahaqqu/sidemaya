<x-app-layout>

    <x-slot name="header">
        <div class="landing-page" style="background-image: url('backgrounds/');">
            <div class="jumbotron text-center p-5">
                <h1 class="text-white"><strong>Selamat Datang di Layanan SIDEMAYA</strong></h1>
                <p class="text-white"><strong>Dapatkan Layanan Desa dengan Mudah Cepat dan Nyaman.
                        Desa kami adalah desa modern dengan budaya yang memanfaatkan teknologi untuk menjalankan proses bisnis kami.</strong></p>
                <p class="text-white p-5"><strong>Silakan login untuk mendapatkan layanan</strong></p>
                <a class="btn btn-warning btn-lg" href="login.php" role="button">Login</a>
                <a class="btn btn-outline-warning btn-lg" href="Register.php" role="button">Register</a>
            </div>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
</x-app-layout>
