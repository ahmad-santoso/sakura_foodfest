<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.home');
    }

    public function showRingkasanPenjualan()
    {
        return view('fitur.ringkasan-penjualan');
    }

    public function showDaftarMenuTerlaris()
    {
        return view('fitur.daftarmenu-terlaris');
    }

    public function showTableReservasi()
    {
        return view('fitur.table-reservasi');
    }
}
