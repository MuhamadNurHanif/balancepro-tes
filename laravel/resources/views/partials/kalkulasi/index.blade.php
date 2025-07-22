@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalkulasi - Admin Panel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f8fafc;
            }

            .sidebar-item.active {
                background-color: #eff6ff;
                border-left: 4px solid #3b82f6;
                color: #1d4ed8;
            }

            .sidebar-item.active svg {
                color: #1d4ed8;
            }

            input:focus,
            select:focus,
            textarea:focus {
                outline: none;
                box-shadow: 0 0 0 2px #bfdbfe;
                border-color: #3b82f6;
            }

            .table-row:hover {
                background-color: #f8fafc;
            }
        </style>
    </head>

    <body class="min-h-screen bg-gray-50">
        <div class="flex">
            <!-- Main content -->
            <div class="flex flex-col flex-1 overflow-hidden">
                <!-- Top navigation for mobile -->
                <div class="md:hidden flex justify-between items-center h-16 px-4 bg-white border-b border-gray-200">
                    <div class="flex items-center">
                        <span class="text-lg font-semibold text-gray-800">Kalkulasi</span>
                    </div>
                    <button class="p-2 rounded-md bg-blue-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </button>
                </div>

                <main class="flex-1 overflow-y-auto focus:outline-none">
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="md:flex md:items-center md:justify-between mb-6">
                                <div class="flex-1 min-w-0">
                                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                                        Kalkulasi Komponen</h2>
                                </div>
                                <div class="mt-4 flex md:mt-0 md:ml-4">
                                    <button type="button"
                                        class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>

                            <!-- Calculation Form -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Form Kalkulasi</h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Masukkan detail komponen untuk
                                        melakukan perhitungan.</p>
                                </div>
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                        <div class="sm:col-span-2">
                                            <label for="component-id" class="block text-sm font-medium text-gray-700">No
                                                ID Komponen Aktif</label>
                                            <div class="mt-1">
                                                <input type="text" name="component-id" id="component-id"
                                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                                    placeholder="KMP-001">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="weight" class="block text-sm font-medium text-gray-700">Berat
                                                (kg)</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <input type="number" name="weight" id="weight"
                                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                                    placeholder="0.00">
                                                <div
                                                    class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">kg</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="angle" class="block text-sm font-medium text-gray-700">Sudut
                                                (derajat)</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <input type="number" name="angle" id="angle"
                                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border"
                                                    placeholder="0">
                                                <div
                                                    class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">°</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="description"
                                                class="block text-sm font-medium text-gray-700">Keterangan</label>
                                            <div class="mt-1">
                                                <select id="description" name="description"
                                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                                    <option>Pilih keterangan</option>
                                                    <option>Komponen Utama</option>
                                                    <option>Komponen Sekunder</option>
                                                    <option>Komponen Tambahan</option>
                                                    <option>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="notes" class="block text-sm font-medium text-gray-700">Catatan
                                                Tambahan</label>
                                            <div class="mt-1">
                                                <textarea id="notes" name="notes" rows="3"
                                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                                                    placeholder="Masukkan catatan tambahan jika diperlukan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Hitung
                                    </button>
                                </div>
                            </div>

                            <!-- Data Table -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Data Komponen</h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Daftar komponen yang telah diinput
                                        untuk kalkulasi.</p>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    No ID</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Berat (kg)</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Sudut (°)</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Keterangan</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Status</th>
                                                <th scope="col" class="relative px-6 py-3"><span
                                                        class="sr-only">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr class="table-row">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    KMP-001</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12.5</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">45</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Komponen
                                                    Utama</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#"
                                                        class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="table-row">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    KMP-002</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8.2</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Komponen
                                                    Sekunder</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#"
                                                        class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="table-row">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    KMP-003</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5.7</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">60</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Komponen
                                                    Tambahan</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Proses</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#"
                                                        class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="table-row">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    KMP-004</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3.1</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Lainnya</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Error</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#"
                                                        class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                                    <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div
                                    class="bg-gray-50 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                    <div class="flex-1 flex justify-between sm:hidden">
                                        <a href="#"
                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Previous</a>
                                        <a href="#"
                                            class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Next</a>
                                    </div>
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
                                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                                aria-label="Pagination">
                                                <a href="#"
                                                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                    <span class="sr-only">Previous</span>
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <a href="#" aria-current="page"
                                                    class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                                                <a href="#"
                                                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                                                <a href="#"
                                                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</a>
                                                <a href="#"
                                                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                    <span class="sr-only">Next</span>
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script>
            // Simple JavaScript for demonstration
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile menu toggle functionality would go here
                console.log('Admin panel loaded');

                // Form submission handler
                const form = document.querySelector('form');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        alert('Perhitungan sedang diproses...');
                        // Here you would normally send data to server
                    });
                }
            });
        </script>
    </body>

    </html>
@endsection
