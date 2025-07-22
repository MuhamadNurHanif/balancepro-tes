<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BalancePro</title>
    <link rel="icon" href="/assets/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .nav-item:hover {
            background-color: #f3f4f6;
        }

        .nav-item.active {
            background-color: #e5e7eb;
            border-left: 3px solid #3b82f6;
        }

        .table-row:hover {
            background-color: #f9fafb;
        }

        .shadow-soft {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 border-r border-gray-200 bg-white">
                <div class="flex items-center h-16 px-6 border-b border-gray-200">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-10 mr-3">
                    <span class="logo-text text-xl font-bold text-gray-800">BalancePro</span>
                </div>

                <div class="flex flex-col flex-grow p-4 overflow-y-auto">
                    <nav class="flex-1 space-y-2">
                        @php
                            use Illuminate\Support\Str;

                            $navItems = [
                                [
                                    'label' => 'Dashboard',
                                    'route' => 'dashboard.index',
                                    'icon' => 'M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z',
                                ],
                                [
                                    'label' => 'Komponen Data',
                                    'route' => 'component.index',
                                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                                ],
                                [
                                    'label' => 'Data Timbangan',
                                    'route' => 'timbangan.index',
                                    'icon' =>
                                        'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                                ],
                                [
                                    'label' => 'Kalkulasi',
                                    'route' => 'kalkulasi.index',
                                    'icon' =>
                                        'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                                ],
                                [
                                    'label' => 'Visualisasi',
                                    'route' => 'visualisasi.index',
                                    'icon' => 'M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18v4H3V4z',
                                ],
                                [
                                    'label' => 'Laporan',
                                    'route' => 'laporan.index',
                                    'icon' => 'M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z',
                                ],
                                [
                                    'label' => 'Penggunaan Aplikasi',
                                    'route' => 'penggunaan.index',
                                    'icon' =>
                                        'M12 6c0-1.105-.895-2-2-2H6a2 2 0 00-2 2v12a2 2 0 012 2h4c1.105 0 2-.895 2-2V6zm0 0c0-1.105.895-2 2-2h4a2 2 0 012 2v12a2 2 0 01-2 2h-4c-1.105 0-2-.895-2-2V6z',
                                ],
                            ];
                        @endphp

                        @foreach ($navItems as $item)
                            @php
                                $isActive = request()->routeIs(Str::before($item['route'], '.') . '*');
                            @endphp

                            <a href="{{ route($item['route']) }}"
                                class="flex items-center px-4 py-3 text-sm font-medium rounded-md nav-item
       {{ $isActive ? 'bg-gray-100 text-blue-600' : 'text-gray-700 hover:bg-gray-50' }}">
                                <svg class="w-5 h-5 mr-3 {{ $isActive ? 'text-blue-500' : 'text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $item['icon'] }}"></path>
                                </svg>
                                {{ $item['label'] }}
                            </a>
                        @endforeach

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-md nav-item hover:bg-gray-50">
                                <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </nav>
                </div>
            </div>
        </div>


        <!-- Mobile Navigation -->
        <div class="md:hidden">
            <div class="flex items-center justify-between h-16 px-4 bg-white border-b border-gray-200">
                <h1 class="text-lg font-semibold text-gray-800">Admin Panel</h1>
                <button
                    class="p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="px-2 py-3 bg-white shadow-md">
                <nav class="flex space-x-4 overflow-x-auto">
                    <a href="#"
                        class="px-3 py-2 text-sm font-medium text-gray-700 whitespace-nowrap rounded-md hover:bg-gray-100">
                        Input Data
                    </a>
                    <a href="#"
                        class="px-3 py-2 text-sm font-medium text-gray-700 whitespace-nowrap rounded-md hover:bg-gray-100">
                        Kalkulasi
                    </a>
                    <a href="#"
                        class="px-3 py-2 text-sm font-medium text-blue-600 whitespace-nowrap rounded-md bg-blue-50">
                        Rekomendasi
                    </a>
                    <a href="#"
                        class="px-3 py-2 text-sm font-medium text-gray-700 whitespace-nowrap rounded-md hover:bg-gray-100">
                        Visualisasi
                    </a>
                    <a href="#"
                        class="px-3 py-2 text-sm font-medium text-gray-700 whitespace-nowrap rounded-md hover:bg-gray-100">
                        Logout
                    </a>
                </nav>
            </div>
        </div>

        <main class="flex-1 overflow-y-auto px-4 py-6 bg-gray-50">
            @yield('content')
        </main>
    </div>
</body>

</html>
