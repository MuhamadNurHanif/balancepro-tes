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

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }

            .pdf-container {
                box-shadow: none !important;
                border: none !important;
            }
        }

          .pdf-container {
                height: 70vh;
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

                                [
                                    'label' => 'Pengaturan',
                                    'route' => 'pengaturan.index',
                                    'icon' =>
                                        'M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z',
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
                    <div class="mt-auto border-t border-gray-200 pt-4 px-4">
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full object-cover border"
                                src="{{ asset('assets/hanif.jpeg') }}" alt="User Avatar">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-800">Hanif</p>
                                <p class="text-xs text-gray-500">Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="flex-1 overflow-y-auto bg-gray-50">
            <div class="flex flex-col min-h-screen px-4 py-6">
                <div class="flex-1">
                    @yield('content')
                </div>

                {{-- Footer --}}
                <footer class="bg-white pt-2 pb-4 px-4 border-t mt-16">
                    <div class="text-center text-gray-500 text-sm mt-0">
                        © 2025 BalancePro. All rights reserved.
                    </div>
                </footer>
            </div>
        </main>

    </div>
</body>

</html>
