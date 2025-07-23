@extends('dashboard')

@section('content')
    <div class="flex flex-col flex-1 overflow-hidden">
        <main class="flex-1 overflow-y-auto p-6">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Mengelola Komponen Data</h2>

                </div>

                <div class="bg-white rounded-lg shadow-soft overflow-hidden">
                    <div class="p-4 border-b border-gray-200">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0">
                            <!-- Bagian Kiri: Search -->
                            <div class="relative max-w-xs">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="search"
                                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Search">
                                </div>
                            </div>


                            <div class="flex flex-wrap items-center gap-2 md:gap-3">

                                <button title="Simpan Semua"
                                    class="inline-flex items-center justify-center px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fas fa-save text-white"></i>
                                </button>


                                <a href="{{ route('laporan.index') }}" title="Cetak Semua"
                                    class="inline-flex items-center justify-center px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <i class="fas fa-print text-white"></i>
                                </a>


                                <a href="{{ route('kalkulasi.index') }}" title="Kalkulasi"
                                    class="inline-flex items-center justify-center px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                                    <i class="fas fa-calculator text-white"></i>
                                </a>


                                <form action="#" method="POST" onsubmit="return confirm('Yakin hapus semua data?')"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Hapus Semua"
                                        class="inline-flex items-center justify-center px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <i class="fas fa-trash-alt text-white"></i>
                                    </button>
                                </form>

                                <select
                                    class="block pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option>Filter by Unit</option>
                                    <option>Unit 1</option>
                                    <option>Unit 2</option>
                                    <option>Unit 3</option>
                                </select>

                                <button
                                    class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="-ml-0.5 mr-2 h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Filter
                                </button>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No
                                </th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">ID
                                    Komponen Aktif (KA)</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Berat
                                    (gram)</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Sudut
                                    (0 - 360°)</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">
                                    Keterangan</th>
                                <th class="px-4 py-3 text-center font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ([['id' => 'KA-001', 'berat' => 250, 'sudut' => 45], ['id' => 'KA-002', 'berat' => 270, 'sudut' => 90], ['id' => 'KA-003', 'berat' => 265, 'sudut' => 180]] as $index => $item)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 text-gray-900 font-medium">{{ $index + 1 }}</td>
                                    <td class="px-4 py-4 text-gray-700">{{ $item['id'] }}</td>
                                    <td class="px-4 py-4 text-gray-700">{{ $item['berat'] }}</td>
                                    <td class="px-4 py-4 text-gray-700">{{ $item['sudut'] }}</td>
                                    <td class="px-4 py-4 text-gray-500 italic">Otomatis</td>
                                    <td class="px-4 py-4 text-center">
                                        <div class="flex items-center justify-center gap-3 text-gray-600">
                                            <a href="#" title="Kalkulasi" class="hover:text-blue-600">
                                                <i class="fas fa-calculator"></i>
                                            </a>
                                            <a href="#" title="Simpan Semua" class="hover:text-green-600">
                                                <i class="fas fa-save"></i>
                                            </a>
                                            <a href="#" title="Edit" class="hover:text-indigo-600">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" title="Cetak Laporan" class="hover:text-purple-600">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            <a href="#" title="Hapus" class="hover:text-red-600">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">4</span>
                                of
                                <span class="font-medium">12</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#" aria-current="page"
                                    class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#"
                                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#"
                                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <a href="#"
                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
@endsection
