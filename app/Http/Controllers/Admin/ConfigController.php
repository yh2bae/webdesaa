<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index ()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $config = Configuration::all()->first();

        return view('admin.config.index', compact('config', 'desa'));
    }

    public function update(Request $request, Configuration $configuration)
    {

        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

       $request->validate([
            'keywords' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'google_maps' => 'required',
        ]);

        $configuration->update([
            'keywords' => $request->keywords,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'google_maps' => $request->google_maps,
        ]);

        return redirect()->back()->with(['success' => 'Configurasi Berhasil diubah']);


    }
}
