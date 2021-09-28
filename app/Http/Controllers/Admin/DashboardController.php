<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Penduduk;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $totalPenduduk = Penduduk::all();

        return view('admin.dashboard.index', compact('desa', 'totalPenduduk'));
    }
}
