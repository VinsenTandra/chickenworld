<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index () {
        return view('login');
    }

    public function login(Request $request) {
        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validation->fails()) {
            return back()->withErrors("message", "Data tidak lengkap");
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors("message", "Gagal login");
    }

    public function logout()
    {
        // Session::flush();

        Auth::logout();
        return redirect('/');

    }
}

?>
