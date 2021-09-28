<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\Artikel;
use App\Models\kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $artikel = Artikel::all();

        $desa = Desa::all()->first();


        return view('admin.berita.index', compact('artikel', 'desa'));
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

        $kategori = Kategori::all();

        $desa = Desa::all()->first();


        return view('admin.berita.create', compact('kategori', 'desa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Artikel $artikel)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'writer' => 'required'
        ],[
            'title.required' => 'Judul wajib diisi',
            'description.required' => 'Isi Artikel wajib diisi',
            'kategori_id.required' => 'Kategori wajib dipilih',
            'image.required' => 'Image wajib diisi.',
            'writer.required' => 'Penulis wajib diisi.'
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $artikel['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/berita');
            $img->move($filePath, $artikel['image']);
        } 

        Artikel::create([
            'title' =>$request->title,
            'slug' =>Str::slug($request->title),
            'kategori_id' => $request->kategori_id,
            'description' => $request->description,
            'image' => $artikel ['image'],
            'publish' => $request->publish,
            'tanggal_publish' => $request->tanggal_publish,
            'writer' => $request->writer
        ]);

        return redirect()->route('artikel.index')->with(['success' => 'Data Artikel Berhasil ditambah']);

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
    public function edit(Artikel $artikel)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $kategori = Kategori::all();

        return view('admin.berita.edit',compact('kategori','desa', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'kategori_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'writer' => 'required'
        ],[
            'title.required' => 'Judul wajib diisi',
            'kategori_id.required' => 'Kategori wajib dipilih',
            'description.required' => 'Isi Artikel wajib diisi',
            'writer.required' => 'Penulis wajib diisi.'
        ]);


        
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $artikel['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/berita');
            $img->move($filePath, $artikel['image']);
        } else {
            $img = $artikel->image;
        }

        $artikel->update([
            'title' =>$request->title,
            'slug' =>Str::slug($request->title),
            'kategori_id' => $request->kategori_id,
            'description' => $request->description,
            'image' => $artikel ['image'],
            'publish' => $request->publish,
            'tanggal_publish' => $request->tanggal_publish,
            'writer' => $request->writer
        ]);

        return redirect()->route('artikel.index')->with(['success' => 'Data Artikel Berhasil diubah']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $artikel->delete();

        return redirect()->back()->with('success', 'Data Artikel berhasil dihapus');
    }
}
