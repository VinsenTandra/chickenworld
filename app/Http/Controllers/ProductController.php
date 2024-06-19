<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index() {
        $data = product::all();
        return view("daftar-produk", compact('data'));
    }

    public function tambah() {
        return view("tambah-produk");
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(),[
            "nama_produk" => "required",
            "harga_produk" => "required"
        ]);

        if($validator->fails()) {
            return back()->withErrors("message", "Data tidak lengkap");
        }

        $product = new product();
        $product->nama_produk = $request->nama_produk;
        $product->harga_produk = $request->harga_produk;
        if($product->save()) {
            return redirect()->intended("produk");
        }
    }
}
