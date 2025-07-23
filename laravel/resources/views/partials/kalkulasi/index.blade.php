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

                            <!-- Hasil Analisis -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Hasil Analisis Komponen</h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Berikut adalah hasil kalkulasi vektor
                                        dan penilaian ilmiah dari distribusi massa komponen.</p>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID Komponen</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Berat (g)</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Sudut (°)</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Komponen X</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Komponen Y</th>
                                                <th
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    KMP-001</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">276.4</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">0</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">276.40</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">0.00</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">Blabla</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">KMP-002</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">274.5</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">30</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">237.72</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">137.25</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">Blabla</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">KMP-003</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">274.5</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">60</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">137.25</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">237.72</td>
                                                <td class="px-6 py-4 text-sm text-gray-500">Blabla</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                                    <h4 class="text-md font-semibold text-gray-800 mb-2">Ringkasan Analisis</h4>
                                    <ul class="text-sm text-gray-600 list-disc list-inside">
                                        <li><strong>Magnitudo Total:</strong> 0.51 gram – menunjukkan distribusi massa
                                            hampir seimbang.</li>
                                        <li><strong>Arah Sudut Resultan:</strong> 252° – terjadi ketidakseimbangan kecil di
                                            kuadran III (barat daya).</li>
                                        <li><strong>Rekomendasi:</strong> Tambahkan massa kecil ±0.5 g di arah sekitar 72°
                                            untuk kompensasi.</li>
                                    </ul>

                                    <h4 class="text-md font-semibold text-gray-800 mt-4 mb-2">Analisis Tambahan
                                    </h4>
                                    <ul class="text-sm text-gray-600 list-disc list-inside">
                                        <li><strong>Stabilitas Rotasi:</strong> Distribusi simetris komponen sangat penting
                                            untuk meminimalisasi vibrasi mekanis.</li>
                                        <li><strong>Presisi Dinamis:</strong> Ketidakseimbangan kecil dapat berpengaruh
                                            besar dalam sistem berputar kecepatan tinggi.</li>
                                        <li><strong>Energi Tersimpan:</strong> Semakin kecil momen gaya total, semakin
                                            efisien energi sistem bekerja tanpa redaman tambahan.</li>
                                    </ul>
                                </div>


                            </div>

                            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Tambahan</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4 class="font-medium text-gray-700 mb-2">Detail Unit</h4>
                                            <div class="space-y-3">
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Tipe Unit</span>
                                                    <span class="font-medium">Turbin Uap</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Kapasitas</span>
                                                    <span class="font-medium">500 MW</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Lokasi</span>
                                                    <span class="font-medium">PLTU Jawa 1</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Tanggal Analisis</span>
                                                    <span class="font-medium">15 Juni 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-700 mb-2">Rekomendasi</h4>
                                            <div class="bg-blue-50 p-4 rounded-lg">
                                                <p class="text-blue-800">Disarankan untuk menyesuaikan berat pada posisi 3
                                                    dan 7 untuk
                                                    mencapai keseimbangan optimal. Perubahan berat yang diperlukan: +1.2kg
                                                    pada posisi 3
                                                    dan -0.8kg pada posisi 7.</p>
                                            </div>
                                            <div class="mt-4 flex space-x-3">
                                                <button
                                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Terapkan
                                                    Rekomendasi</button>
                                                <button
                                                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">Simpan
                                                    Laporan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white shadow overflow-hidden sm:rounded-lg ">
                                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Visualisasi</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4 class="font-medium text-gray-700 mb-2">Detail Unit</h4>
                                            <div class="space-y-3">
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Tipe Unit</span>
                                                    <span class="font-medium">Turbin Uap</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Kapasitas</span>
                                                    <span class="font-medium">500 MW</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Lokasi</span>
                                                    <span class="font-medium">PLTU Jawa 1</span>
                                                </div>
                                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                                    <span class="text-gray-500">Tanggal Analisis</span>
                                                    <span class="font-medium">15 Juni 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-700 mb-2">Rekomendasi</h4>
                                            <div class="bg-blue-50 p-4 rounded-lg">
                                                <p class="text-blue-800">Disarankan untuk menyesuaikan berat pada posisi 3
                                                    dan 7 untuk
                                                    mencapai keseimbangan optimal. Perubahan berat yang diperlukan: +1.2kg
                                                    pada posisi 3
                                                    dan -0.8kg pada posisi 7.</p>
                                            </div>
                                            <div class="mt-4 flex space-x-3">
                                                <button
                                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Terapkan
                                                    Rekomendasi</button>
                                                <button
                                                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">Simpan
                                                    Laporan</button>
                                            </div>
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
