<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $slider = Slider::all();

        return view('admin.slider.index', compact('desa', 'slider'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.slider.create', compact('desa'));
    }

    public function store (Request $request, Slider $slider)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:6000'
        ]);

        
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $slider['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/image');
            $img->move($filePath, $slider['image']);
        }

        Slider::Create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $slider['image'],
        ]);

        return redirect()->route('slider.index')->with(['success' => 'Slider Berhasil dibuat']);
    }

    public function edit(Slider $slider)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.slider.edit', compact('desa', 'slider'));
    }

    public function update (Request $request, Slider $slider)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:6000'
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $slider['image'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/image');
            $img->move($filePath, $slider['image']);
        } else {
            $img = $slider['image'];
        }

        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $slider['image'],
        ]);

        return redirect()->back()->with('success', 'Slider berhasil diupdate');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back()->with('success', 'Slider berhasil dihapus');
    }
}
