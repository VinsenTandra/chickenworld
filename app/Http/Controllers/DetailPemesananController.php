<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPemesanan;

class DetailPemesananController extends Controller
{
    //
    public function index() //halaman tabel
    {
        $produk = Produk::all();
        // return $konsumen;
        return view('component/DetailPemesanan')->with('DetailPemesanan', $detailpemesanan);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/DetailPemesanan/create');
    }

    public function edit(){

    }

    public function destroy($id, Request $request){

    }
    public function store(Request $request) //buat simpan data
    {
        Produk::create([
            'kode_produk'                 => $request->kode_produk,
            'penjualan'                   => $request->penjualan,
            'jumlah_pesanan'              => $request->jumlah_pesanan
        ]);
        return redirect('DetailPemesanan')->with('status', 'Data Produk Berhasil ditambahkan!');
    }
    function detail(){

    }
}
