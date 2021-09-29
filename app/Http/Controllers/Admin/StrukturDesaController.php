<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use App\Models\Desa;
use App\Models\Pendidikan;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::all()->first();
        $struktur = Struktur::all();

        return view('admin.struktur.index', compact('struktur' , 'desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $agama = Agama::all();
        $pendidikan = Pendidikan::all();

        return view('admin.struktur.create', compact('desa', 'agama' , 'pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Struktur $struktur)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'address' => 'required',
            'agama_id' => 'required',
            'pendidikan_id' => 'required',
            'nomor_sk' => 'required',
            'tanggal_sk' => 'required',
            'masa_jabatan' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $struktur['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/strukturdesa');
            $img->move($filePath, $struktur['image']);
        } 

         Struktur::create([
            'name' => $request->name,
            'position' => $request->position,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'address' => $request->address,
            'agama_id' => $request->agama_id,
            'pendidikan_id' => $request->pendidikan_id,
            'nomor_sk' =>  $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'masa_jabatan' => $request->masa_jabatan,
            'status' => $request->status,
            'image' =>$struktur['image']
        ]);

        return redirect()->route('struktur.index')->with(['success' => 'Data Struktur Desa Berhasil ditambah']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

         $desa = Desa::all()->first();
         $agama = Agama::all();
         $pendidikan = Pendidikan::all();

         return view('admin.struktur.edit',compact('desa', 'struktur','agama','pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur $struktur)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'address' => 'required',
            'agama_id' => 'required',
            'pendidikan_id' => 'required',
            'nomor_sk' => 'required',
            'tanggal_sk' => 'required',
            'masa_jabatan' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $struktur['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/strukturdesa');
            $img->move($filePath, $struktur['image']);
        } else {
            $img = $struktur->image;
        }

        $struktur->update([
            'name' => $request->name,
            'position' => $request->position,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'address' => $request->address,
            'agama_id' => $request->agama_id,
            'pendidikan_id' => $request->pendidikan_id,
            'nomor_sk' =>  $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'masa_jabatan' => $request->masa_jabatan,
            'status' => $request->status,
            'image' =>$struktur['image']
        ]);

        
        return redirect()->route('struktur.index')->with(['success' => 'Data Struktur Desa Berhasil ditambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $struktur->delete();

        return redirect()->back()->with('success', 'Data Struktur Desa berhasil dihapus');
    }
}
