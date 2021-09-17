<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Rules\LoginRule;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function check(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $model      = new Users();
        $user       = $model->login($username,$password);
        if($user) {
            $request->session()->put('id', $user->id);
            $request->session()->put('nama', $user->name);
            $request->session()->put('username', $user->username);
            $request->session()->put('level', $user->level);
            return redirect()->route('dashboard')->with(['success' => 'Anda berhasil login']);
        }else{
            return redirect('login')->with(['error' => 'Mohon maaf, Username atau password salah']);
        }
    }

    public function logout()
    {
        Session()->forget('id');
        Session()->forget('name');
        Session()->forget('username');
        Session()->forget('level');
        return redirect()->route('login')->with(['success' => 'Anda berhasil logout']);
    }
}
