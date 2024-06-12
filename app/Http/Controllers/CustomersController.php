<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    //
    public function index() //halaman tabel
    {
        $customers = Customers::all();
        // return $konsumen;
        return view('component/Customers')->with('Costumers', $customers);
    }
    public function create() //buat nampilin form nambah datanya
    {
        return view('component/Customers/create');
    }

    public function edit(){

    }

    public function destroy($id, Request $request){

    }
    public function store(Request $request) //buat simpan data
    {
        Produk::create([
            'customer_name'               => $request->customer_name,
            'akun_customer'               => $request->akun_customer,
            'nomer_telepon'               => $request->nomer_telepon,
            'alamat'                      => $request->alamat
        ]);
        return redirect('Customers')->with('status', 'Data Customers Berhasil ditambahkan!');
    }
    function detail(){

    }
}
