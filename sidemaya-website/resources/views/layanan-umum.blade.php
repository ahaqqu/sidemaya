<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Layanan Umum') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="section">
                            <div class="section-header">Surat Keterangan Usaha</div>

                            <div class="mt-4">
                            <button onclick="location.href='../download/layanan-umum/Surat-Keterangan-Usaha.docx'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Unduh') }}
                            </button>

                            <br>
                            <div class="section-content">
                            </div>
                            </div>

                            <div class="mt-4">
                                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <input type="hidden" name="type" value="layanan-umum">
                                    <input type="hidden" name="doctype" value="surat-keterangan-usaha">
                                    <x-primary-button class="ms-3">
                                        {{ __('Unggah') }}
                                    </x-primary-button>
                                </form>
                            </div>
                        </div>
                        <br>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section">
                            <div class="section-header">Surat Keterangan Tidak Mampu</div>

                            <div class="mt-4">
                            <button onclick="location.href='../download/layanan-umum/Surat-Keterangan-Tidak-Mampu.doc'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Unduh') }}
                            </button>

                            <br>
                            <div class="section-content">
                            </div>
                            </div>

                            <div class="mt-4">
                                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <input type="hidden" name="type" value="layanan-umum">
                                    <input type="hidden" name="doctype" value="surat-keterangan-tidak-mampu">
                                        <x-primary-button class="ms-3">
                                            {{ __('Unggah') }}
                                        </x-primary-button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
