<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BalancePro - Login</title>
    <link rel="icon" href="/assets/logo.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .custom-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }
    </style>
</head>

<body class="bg-gray-50 h-screen">
    <div class="flex h-full">
        <!-- Left - Login Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center px-8 lg:px-24">
            <div class="w-full max-w-md space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Welcome Back</h1>
                    <p class="text-gray-500 mt-1">Please login to your account</p>
                </div>

                <form class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                            placeholder="you@example.com" />
                    </div>

                    <div>
                        <div class="flex justify-between">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                        <input id="password" name="password" type="password"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none"
                            placeholder="••••••••" />
                    </div>

                    <div class="flex items-center">
                        <a href="{{ route('dashboard.index') }}"
                            class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-center transition">
                            Login
                        </a>
                    </div>
                </form>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="bg-white px-2 text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <a href="#"
                        class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <p class="text-center text-sm text-gray-600">
                    Don’t have an account?
                    <a href="#" class="text-blue-600 hover:underline">Sign up</a>
                </p>
            </div>
        </div>

        <!-- Right - Illustration -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-br from-blue-50 to-indigo-100 relative">
            <img src="{{ asset('assets/background.png') }}" alt="Background"
                class="absolute inset-0 w-full h-full object-cover opacity-10" />
            <div class="relative z-10 m-auto text-center px-10 max-w-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">BalancePro</h2>
                <p class="text-gray-600">
                    Optimalisasi Proses Static Balancing Pada Rotating Equipment dengan Menggunakan Sistem Berbasis Data
                    Analytics.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
