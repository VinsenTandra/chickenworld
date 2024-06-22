<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index() {
        $penjualans = Penjualan::with("product")->get();
        return view ("riwayat-pesanan", compact('penjualans'));
    }

    public function tambah() {
        $products = Product::where('status_stok', "ready")->get();

        return view('tambah-pesanan', compact('products'));
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(),[
            "nama_pembeli" => "required",
            "produk" => "required",
            "jumlah_pesanan" => "min:1|required",
            "status_pesanan" => "required",
            "harga_produk" => "required",
            "tanggal_pengambilan" => "required"
        ]);

        if($validator->fails()) {
            return back()->withErrors("message", "Data tidak lengkap");
        }

        $penjualan = new Penjualan();
        $penjualan->user_id = auth()->user()->id;
        $penjualan->product_id = $request->produk;
        $penjualan->nomor_pesanan = penjualan::numberGenerator();
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->is_done = $request->status_pesanan;
        $penjualan->jumlah_produk = $request->jumlah_pesanan;
        $penjualan->jumlah_harga = $request->jumlah_pesanan * $request->harga_produk;
        $penjualan->tanggal_pengambilan = $request->tanggal_pengambilan;
        $penjualan->save();

        return redirect()->intended("penjualan");
    }

    public function changeStatus(Request $request) {
        $penjualan = Penjualan::find($request->id);
        $penjualan->is_done = "y";
        $penjualan->save();

        return redirect()->intended("penjualan");
    }
}
