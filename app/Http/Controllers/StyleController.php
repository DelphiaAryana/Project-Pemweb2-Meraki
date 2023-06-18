<?php

namespace App\Http\Controllers;

use App\Models\Uploads;
use App\Models\StyleModern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class StyleController extends Controller
{
    public function index()
    {
        return view('data_style');
    }

    public function show()
    {
        $data['style'] = DB::table('modern_style')->get();
        return view('data_style', $data);

    }

    public function create()
    {
        return view('tambah_style');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');         
        }

        $jenis = $request->input('jenis');
        $image = $request->file('image')->store('images');

        $query = DB::table('modern_style')->insert([
            'jenis' => $jenis,
            'image' => $image
        ]);

        if ($query) {
            return redirect()->route('style.show')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('style.show')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $style = StyleModern::findOrFail($id);

        // Hapus gambar dari storage
        $storagePath = storage_path('app/public/app/images/' . $style->image);
        if (File::exists($storagePath)) {
            File::delete($storagePath);
        }

        $style->delete();

        return redirect()->route('style.show')->with('success', 'Data fasilitas berhasil dihapus.');
        // $query = DB::table('modern_style')->where('id', $id)->delete();

        // if ($query) {
        //     return redirect()->route('style.show')->with('success', 'Data Berhasil Dihapus');
        // } else {
        //     return redirect()->route('style.show')->with('failed', 'Data Gagal Dihapus');
        // }
    }

    public function edit(string $id)
    {
        $data['style'] = DB::table('modern_style')->where('id', $id)->first();

        return view('edit_style', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg',
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');        
        }

        $jenis = $request->input('jenis');
        $image = $request->file('image')->store('images');

        $query = DB::table('modern_style')->where('id', $id)->update([
            'jenis' => $jenis,
            'image' => $image
        ]);

        if ($query) {
            return redirect()->route('style.show')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('style.show')->with('failed', 'Data Gagal Diupdate');
        }
    }
}


