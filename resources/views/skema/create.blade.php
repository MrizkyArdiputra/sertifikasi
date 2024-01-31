<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Skema') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('skema.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="kd_skema" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kode Skema</label>
                            <input type="text" name="kd_skema" id="kd_skema" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                        </div>

                        <div class="mb-4">
                            <label for="nm_skema" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Skema</label>
                            <input type="text" name="nm_skema" id="nm_skema" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                        </div>

                        <div class="mb-4">
                            <label for="jenis" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jenis</label>
                            <input type="text" name="jenis" id="jenis" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                        </div>

                        <div class="mb-4">
                            <label for="jml_unit" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Unit</label>
                            <input type="number" name="jml_unit" id="jml_unit" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
