<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function komponendata()
    {
        return view('partials.komponendata.index');
    }
    public function timbangan()
    {
        return view('partials.timbangan.index');
    }

    public function createTimbangan()
    {
        return view('partials.timbangan.create');
    }

    public function kalkulasi()
    {
        return view('partials.kalkulasi.index');
    }

    public function visualisasi()
    {
        return view('partials.visualisasi.index');
    }

    public function laporan()
    {
        return view('partials.laporan.index');
    }
    public function penggunaan()
    {
        return view('partials.penggunaan.index');
    }

    public function pengaturan()
    {
        return view('partials.pengaturan.index');
    }

    public function logout(Request $request)
    {

        return redirect('/');
    }
}
