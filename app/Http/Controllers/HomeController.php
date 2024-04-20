<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function utama() {
        return view('web.utama', [
            'title' => 'Halaman Utama',
            'page' => 'Utama Controller',
        ]);
    }

    public function kedua() {
        return view('web.kedua', [
            'title' => 'Halaman Kedua',
            'page' => 'Kedua Controller'
        ]);
    }
}
