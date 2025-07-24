@extends('dashboard')

@section('content')
    <main class="flex-grow p-6">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Tambah Data Timbangan</h2>

            <form action="#" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block font-medium mb-1">Kode KA</label>
                    <input type="text" name="name" id="name" value="#"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="slug" class="block font-medium mb-1">Sudut</label>
                    <input type="text" name="slug" id="slug" value="#"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        readonly>
                    <small class="text-sm text-gray-500">*Sudut ini merupakan nilai yang dihasilkan secara otomatis
                        (generated)</small>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex space-x-3">
                        <button type="submit"
                            class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Simpan
                        </button>

                    </div>
                    <div>
                        <a href="{{ route('component.create') }}"
                            class="bg-green-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-green-700 transition duration-300">Next
                            →
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
