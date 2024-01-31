<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Peserta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('peserta.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="kd_skema" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kode Skema</label>
                            <select id="kd_skema" name="kd_skema" class="mt-1 block w-full p-2 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                                @foreach($skemas as $skema)
                                    <option value="{{ $skema->kd_skema }}">{{ $skema->nm_skema }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nm_peserta" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Peserta</label>
                            <input type="text" name="nm_peserta" id="nm_peserta" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                        </div>

                        <div class="mb-4">
                            <label for="jekel" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jenis Kelamin</label>
                            <select id="jekel" name="jekel" class="mt-1 block w-full p-2 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="no_hp" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="mt-1 p-2 w-full border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
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
