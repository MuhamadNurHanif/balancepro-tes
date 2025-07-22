@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }

            .chart-container {
                position: relative;
                height: 100%;
                width: 100%;
            }

            .card-hover:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body class="bg-gray-50">
        <div class="flex h-screen overflow-hidden">

            <!-- Main content -->
            <div class="flex-1 overflow-auto">
                <main class="p-6">
                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div
                            class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 card-hover transition-all duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Unit Pembangkit</p>
                                    <h3 class="text-2xl font-semibold text-gray-800 mt-1">Unit 4</h3>
                                </div>
                                <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm text-green-600 mt-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                Aktif
                            </p>
                        </div>

                        <div
                            class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 card-hover transition-all duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Total Berat Komponen</p>
                                    <h3 class="text-2xl font-semibold text-gray-800 mt-1">1,248 kg</h3>
                                </div>
                                <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2h2v5a1 1 0 01-1 1h-1a1 1 0 01-1-1v-5z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-3">± 2% dari target</p>
                        </div>

                        <div
                            class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 card-hover transition-all duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Jumlah Titik Ketidakseimbangan</p>
                                    <h3 class="text-2xl font-semibold text-gray-800 mt-1">8</h3>
                                </div>
                                <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm text-yellow-600 mt-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                Perlu penyesuaian
                            </p>
                        </div>

                        <div
                            class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 card-hover transition-all duration-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Status Optimalisasi</p>
                                    <h3 class="text-2xl font-semibold text-gray-800 mt-1">78%</h3>
                                </div>
                                <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Charts -->
                    <div class="lg:col-span-2 w-full mb-6">
                        <!-- Component Placement Chart -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Saran Peletakkan Komponen Aktif</h3>
                                <button class="px-3 py-1 text-sm bg-blue-50 text-blue-600 rounded-md flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Ekspor
                                </button>
                            </div>
                            <div class="chart-container" style="height: 300px;">
                                <canvas id="placementChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
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
                                    <p class="text-blue-800">Disarankan untuk menyesuaikan berat pada posisi 3 dan 7 untuk
                                        mencapai keseimbangan optimal. Perubahan berat yang diperlukan: +1.2kg pada posisi 3
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
                </main>
            </div>
        </div>

        <script>
            // Mobile menu toggle
            document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
                document.querySelector('.sidebar').classList.toggle('sidebar-open');
            });

            // Residual Unbalance Chart
            const residualCtx = document.getElementById('residualChart').getContext('2d');
            const residualChart = new Chart(residualCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Residual Unbalance (g)',
                        data: [12, 19, 15, 8, 11, 6, 14, 9, 7, 10, 5, 8],
                        backgroundColor: 'rgba(37, 99, 235, 0.05)',
                        borderColor: 'rgba(37, 99, 235, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: 'rgba(37, 99, 235, 1)',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 14
                            },
                            bodyFont: {
                                size: 12
                            },
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.parsed.y + 'g';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return value + 'g';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Component Placement Chart
            const placementCtx = document.getElementById('placementChart').getContext('2d');
            const placementChart = new Chart(placementCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Posisi 1', 'Posisi 2', 'Posisi 3', 'Posisi 4', 'Posisi 5', 'Posisi 6', 'Posisi 7',
                        'Posisi 8'
                    ],
                    datasets: [{
                        data: [15, 20, 25, 10, 15, 20, 30, 25],
                        backgroundColor: [
                            'rgba(37, 99, 235, 0.7)',
                            'rgba(79, 70, 229, 0.7)',
                            'rgba(99, 102, 241, 0.7)',
                            'rgba(129, 140, 248, 0.7)',
                            'rgba(165, 180, 252, 0.7)',
                            'rgba(99, 102, 241, 0.7)',
                            'rgba(79, 70, 229, 0.7)',
                            'rgba(37, 99, 235, 0.7)'
                        ],
                        borderColor: [
                            'rgba(37, 99, 235, 1)',
                            'rgba(79, 70, 229, 1)',
                            'rgba(99, 102, 241, 1)',
                            'rgba(129, 140, 248, 1)',
                            'rgba(165, 180, 252, 1)',
                            'rgba(99, 102, 241, 1)',
                            'rgba(79, 70, 229, 1)',
                            'rgba(37, 99, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                boxWidth: 12,
                                padding: 20,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 14
                            },
                            bodyFont: {
                                size: 12
                            },
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    },
                    cutout: '65%'
                }
            });
        </script>
    </body>

    </html>
@endsection
