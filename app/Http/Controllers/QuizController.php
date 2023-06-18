<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function show()
    {
        return view('kuis');
    }

    public function showKuis()
    {
        $dataKuis['kuis'] = DB::table('data_soal')
                    ->inRandomOrder()
                    ->take(10)
                    ->get();
        return view('quiz', $dataKuis);
    }

    public function showData()
    {
        $data['kuis'] = DB::table('data_soal')->get();
        return view('data_kuis', $data);
    }

    public function create()
    {
        return view('tambah_kuis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'soal' => 'required',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'kunci_jawaban' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');         
        }

        $soal = $request->input('soal');
        $jawaban_a = $request->input('jawaban_a');
        $jawaban_b = $request->input('jawaban_b');
        $jawaban_c = $request->input('jawaban_c');
        $jawaban_d = $request->input('jawaban_d');
        $kunci_jawaban = $request->input('kunci_jawaban');
        $image = $request->file('image')->store('images');

        $query = DB::table('data_soal')->insert([
            'soal' => $soal,
            'jawaban_a' => $jawaban_a,
            'jawaban_b' => $jawaban_b,
            'jawaban_c' => $jawaban_c,
            'jawaban_d' => $jawaban_d,
            'kunci_jawaban' => $kunci_jawaban,
            'image' => $image
        ]);

        if ($query) {
            return redirect()->route('datakuis.show')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('datakuis.show')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $quiz = Quiz::findOrFail($id);

        // Hapus gambar dari storage
        $storagePath = storage_path('app/public/app/images/' . $quiz->image);
        if (File::exists($storagePath)) {
            File::delete($storagePath);
        }

        $quiz->delete();

        return redirect()->route('datakuis.show')->with('success', 'Data fasilitas berhasil dihapus.');
        // $query = DB::table('data_soal')->where('id', $id)->delete();

        // if ($query) {
        //     return redirect()->route('datakuis.show')->with('success', 'Data Berhasil Dihapus');
        // } else {
        //     return redirect()->route('datakuis.show')->with('failed', 'Data Gagal Dihapus');
        // }
    }

    public function edit(string $id)
    {
        $data['kuis'] = DB::table('data_soal')->where('id', $id)->first();

        return view('edit_kuis', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'soal' => 'required',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'kunci_jawaban' => 'required',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg,gif,svg'
        ]);
        if ($request->file('image')) {    
            $validateDate['image']=$request->file('image')->store('public/app/images');         
        }

        $soal = $request->input('soal');
        $jawaban_a = $request->input('jawaban_a');
        $jawaban_b = $request->input('jawaban_b');
        $jawaban_c = $request->input('jawaban_c');
        $jawaban_d = $request->input('jawaban_d');
        $kunci_jawaban = $request->input('kunci_jawaban');
        $image = $request->file('image')->store('images');

        $query = DB::table('data_soal')->where('id', $id)->update([
            'soal' => $soal,
            'jawaban_a' => $jawaban_a,
            'jawaban_b' => $jawaban_b,
            'jawaban_c' => $jawaban_c,
            'jawaban_d' => $jawaban_d,
            'kunci_jawaban' => $kunci_jawaban,
            'image' => $image
        ]);

        if ($query) {
            return redirect()->route('datakuis.show')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('datakuis.show')->with('failed', 'Data Gagal Diupdate');
        }
    }

}
