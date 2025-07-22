@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Laporan Balancing Rotating Equipment</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            @media print {
                .no-print {
                    display: none !important;
                }

                body {
                    padding: 0;
                    margin: 0;
                    background: white;
                }

                .print-container {
                    box-shadow: none !important;
                    border: none !important;
                }

                .table-print {
                    page-break-inside: avoid;
                }

                .page-break {
                    page-break-after: always;
                }
            }

            body {
                font-family: 'Inter', sans-serif;
            }

            .signature-line {
                border-top: 1px solid #333;
                width: 200px;
                display: inline-block;
                margin-top: 60px;
            }

            .table-border {
                border: 1px solid #e2e8f0;
            }

            .table-header {
                background-color: #f8fafc;
            }
        </style>
    </head>

    <body class="bg-gray-50 p-4 md:p-8">
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md overflow-hidden print-container">
            <!-- Header Section -->
            <div class="p-6 bg-blue-700 text-white">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">Form Laporan Balancing Rotating Equipment</h1>
                        <p class="text-blue-100">Laporan teknis hasil pekerjaan balancing rotating equipment</p>
                    </div>
                    <button onclick="window.print()"
                        class="no-print bg-white text-blue-700 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition flex items-center gap-2">
                        <i class="fas fa-print"></i> Print Report
                    </button>
                </div>
            </div>

            <!-- Main Content -->
            <div class="p-6 space-y-8">
                <!-- Table A - Informasi Umum -->
                <div class="table-print">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-6 bg-blue-600 rounded mr-2"></div>
                        <h2 class="text-xl font-semibold text-gray-800">A. Informasi Umum</h2>
                    </div>
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 w-1/2">Nama
                                        Unit Pembangkit</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">: [Nama Unit Pembangkit]
                                    </td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Tanggal
                                        Balancing</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">: [Tanggal Balancing]</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Nama Teknisi
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">: [Nama Teknisi]</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Nomor Lisensi
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">: [Nomor Lisensi]</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Nomor Seri
                                        Equipment</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">: [Nomor Seri Equipment]
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table B - Data Komponen Aktif (KA) -->
                <div class="table-print">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-6 bg-blue-600 rounded mr-2"></div>
                        <h2 class="text-xl font-semibold text-gray-800">B. Data Komponen Aktif (KA)</h2>
                    </div>
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 table-border">
                            <thead class="table-header">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        No</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        ID Komponen Aktif (KA)</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        Berat</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        Posisi Sudut</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KA-001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25.4 g</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">45°</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KA-002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">26.1 g</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">135°</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KA-003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">24.9 g</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">225°</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KA-004</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25.7 g</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">315°</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-sm text-gray-500 mt-2 italic">*Data diambil dari timbangan tersertifikasi</p>
                </div>

                <!-- Table C - Konfigurasi Hasil Algoritma BalancePro -->
                <div class="table-print">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-6 bg-blue-600 rounded mr-2"></div>
                        <h2 class="text-xl font-semibold text-gray-800">C. Konfigurasi Hasil Algoritma BalancePro</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="py-3 text-sm font-medium text-gray-700">Jumlah KA Terpasang</td>
                                        <td class="py-3 text-sm text-gray-500">: 4</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-3 text-sm font-medium text-gray-700">Posisi Rekomendasi Komponen</td>
                                        <td class="py-3 text-sm text-gray-500">: 45°, 135°, 225°, 315°</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-sm font-medium text-gray-700">Rata-rata Berat KA</td>
                                        <td class="py-3 text-sm text-gray-500">: 25.53 g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="py-3 text-sm font-medium text-gray-700">Deviasi Berat KA</td>
                                        <td class="py-3 text-sm text-gray-500">: ±0.6 g</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="py-3 text-sm font-medium text-gray-700">Residual Unbalance Sebelum
                                            Balancing</td>
                                        <td class="py-3 text-sm text-gray-500">: 1.2 g</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-sm font-medium text-gray-700">Residual Unbalance Setelah
                                            Balancing</td>
                                        <td class="py-3 text-sm text-gray-500">: 0.3 g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Table D - Dokumentasi & Evaluasi -->
                <div class="table-print">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-6 bg-blue-600 rounded mr-2"></div>
                        <h2 class="text-xl font-semibold text-gray-800">D. Dokumentasi & Evaluasi</h2>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-6">
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-sm font-medium text-gray-700 mb-2">Verifikasi Pemasangan</h3>
                                <div class="bg-gray-50 p-3 rounded text-sm text-gray-700 min-h-20 border border-gray-200">
                                    [Deskripsi verifikasi pemasangan]
                                </div>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-700 mb-2">Kondisi Fisik Komponen</h3>
                                <div class="bg-gray-50 p-3 rounded text-sm text-gray-700 min-h-20 border border-gray-200">
                                    [Deskripsi kondisi fisik komponen]
                                </div>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-700 mb-2">Waktu Total Proses</h3>
                                <div class="bg-gray-50 p-3 rounded text-sm text-gray-700 min-h-20 border border-gray-200">
                                    [Waktu total proses balancing]
                                </div>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-700 mb-2">Kesimpulan Akhir</h3>
                                <div class="bg-gray-50 p-3 rounded text-sm text-gray-700 min-h-20 border border-gray-200">
                                    [Kesimpulan akhir dari proses balancing]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table E - Tanda Tangan -->
                <div class="table-print">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-6 bg-blue-600 rounded mr-2"></div>
                        <h2 class="text-xl font-semibold text-gray-800">E. Tanda Tangan</h2>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="text-center">
                                <div class="min-h-24 border-b border-gray-200 mb-2"></div>
                                <p class="text-sm font-medium text-gray-700">Teknisi Pelaksana</p>
                                <p class="text-xs text-gray-500 mt-1">Nama: ________________________</p>
                                <p class="text-xs text-gray-500">Tanggal: _____________________</p>
                            </div>
                            <div class="text-center">
                                <div class="min-h-24 border-b border-gray-200 mb-2"></div>
                                <p class="text-sm font-medium text-gray-700">Verifikator</p>
                                <p class="text-xs text-gray-500 mt-1">Nama: ________________________</p>
                                <p class="text-xs text-gray-500">Tanggal: _____________________</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Print Button at Bottom -->
                <div class="no-print mt-8 text-center">
                    <button onclick="window.print()"
                        class="bg-blue-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-800 transition flex items-center gap-2 mx-auto">
                        <i class="fas fa-print"></i> Print Report
                    </button>
                </div>
            </div>
        </div>

        <script>
            // You could add JavaScript functionality here if needed
            document.addEventListener('DOMContentLoaded', function() {
                // Any initialization code can go here
            });
        </script>
    </body>

    </html>
@endsection
