<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajukan Surat') }}
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
                            <div class="section-header">{{ $document->category }}</div>

                            <div class="mt-4">
                            @php
echo <<<EOL
                                <button onclick="location.href='../documents/process/$document->uuid'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Unduh dokumen warga
                                </button>
                            EOL;
                            @endphp

                            <br>
                            <div class="section-content">
                            </div>
                            </div>
                            @auth
                            <div class="mt-4">
                                <form action="{{ route('documentsfinal.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     @php
    echo <<<EOL
                                    <input type="hidden" name="uuid" value="$document->uuid">
                                    EOL;
                                    @endphp
        <label for="nomorsurat">Nomor Surat:</label><br>
        <select name="nomorsurat" id="nomorsurat" style="color: black;">
            <option value="Surat A">Surat A</option>
            <option value="Surat B">Surat B</option>
        </select><br><br>

        <label for="file">Unggah Dokumen (PDF):</label><br>
        <input type="file" name="file" accept=".pdf"><br><br>
                                    <x-primary-button class="ms-3">
                                        {{ __('Unggah') }}
                                    </x-primary-button>
                                </form>
                            </div>
                            @endauth
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
