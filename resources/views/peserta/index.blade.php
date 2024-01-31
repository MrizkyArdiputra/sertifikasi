<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
                <form action="{{ route('home') }}" method="GET" class="flex items-center">
                    <input type="text" name="search" placeholder="Cari Peserta..." class="p-2 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-500">
                    <button type="submit" class="px-4 py-2 ml-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Cari
                    </button>
                </form>
            </div>
           

            <div class="mt-4 overflow-x-auto overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                ID Peserta
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Kode Skema
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                NIK
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Nama Peserta
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Jenis Kelamin
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Alamat
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-extrabold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                No. HP
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-center dark:divide-gray-700">
                        @foreach ($data as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id_peserta }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->kd_skema }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->NIK }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nm_peserta }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->jekel }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->alamat }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->no_hp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
