<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Customers;
use Hash;

class AuthController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        return Customers::all();
        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect ()->intended('dashboard')
                                ->withSucccess('Login Berhasil!');
        }
        return redirect("login")->withSuccess('Gagal Login');
    }
}

?>