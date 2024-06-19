<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index() {
        return view ("riwayat-pesanan");
    }

    public function tambah() {
        $products = Product::all();
        return view("tambah-pesanan")
        ->with('products', $products);
    }
}
