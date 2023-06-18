<?php

namespace App\Http\Controllers;

use App\Models\Motif;
use App\Models\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MotifController extends Controller
{
    public function index()
    {
        return view('data_motif');
    }

    public function show()
    {
        $data['motif'] = DB::table('motif_sasirangan')->get();
        return view('data_motif', $data);

    }

    public function showmotif()
    {
        $data['motif'] = DB::table('motif_sasirangan')->get();
        return view('motif', $data);

    }

    public function detailmotif(string $id)
    {
        $data['motif'] = DB::table('motif_sasirangan')->where('id', $id)->first();
        return view('detailmotif', $data);
    }

    public function create()
    {
        return view('tambah_motif');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');         
        }

        $nama = $request->input('nama');
        $deskripsi = $request->input('deskripsi');
        $image = $request->file('image')->store('images');

        $query = DB::table('motif_sasirangan')->insert([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'image' => $image
        ]);

        if ($query) {
            return redirect()->route('motif.show')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('motif.show')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $motif = Motif::findOrFail($id);

        // Hapus gambar dari storage
        $storagePath = storage_path('app/public/app/images/' . $motif->image);
        if (File::exists($storagePath)) {
            File::delete($storagePath);
        }

        $motif->delete();

        return redirect()->route('motif.show')->with('success', 'Data fasilitas berhasil dihapus.');
    }

    public function edit(string $id)
    {
        $data['motif'] = DB::table('motif_sasirangan')->where('id', $id)->first();

        return view('edit_motif', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg',
            'deskripsi' => 'required'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');        
        }

        $nama = $request->input('nama');
        $image = $request->file('image')->store('images');
        $deskripsi = $request->input('deskripsi');

        $query = DB::table('motif_sasirangan')->where('id', $id)->update([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'image' => $image,
        ]);

        if ($query) {
            return redirect()->route('motif.show')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('motif.show')->with('failed', 'Data Gagal Diupdate');
        }
    }
}

