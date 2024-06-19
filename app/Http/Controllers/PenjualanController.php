<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index() {
        return view ("riwayat-pesanan");
    }

    public function tambah() {
        return view("tambah-pesanan");
    }
}
