<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Point;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    public function showNilai(string $score, $user)
    {
        $skor['score'] = $score;
        $pengguna['user'] = $user;
        return view('score', $skor, $pengguna);

    }

    public function show(){
        $data = Point::join('users', 'users.id', '=', 'data_poin.id_user')
                ->select('data_poin.*', 'users.name')
                ->orderByDesc('data_poin.poin_kuis')
                ->get();
        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('data_skor.pdf');
    }


    public function leaderboard()
    {
        $data['poin'] = Point::join('users', 'users.id', '=', 'data_poin.id_user')
                ->select('data_poin.*', 'users.name')
                ->orderByDesc('data_poin.poin_kuis')
                ->get();
        return view('leaderboard', $data);

    }

    public function storePoint(string $nilai, $pengguna)
    {
        $id_user = $pengguna;
        $score = $nilai;

        $query = DB::table('data_poin')->insert([
            'id_user' => $id_user,
            'poin_kuis' => $score
        ]);

        if ($query) {
            return redirect()->route('peringkat.show');
        } else {
            return redirect()->route('peringkat.show');
        }

    }

    public function create()
    {
        $data['users'] = DB::table('users')
                ->whereNotIn('id', function ($query) {
                    $query->select('id_user')
                          ->from('data_poin');
                })
                ->get();
        return view('tambah_poin', $data);
    }

    public function showDataPoint()
    {
        $data['poin'] = Point::join('users', 'users.id', '=', 'data_poin.id_user')
                ->select('data_poin.*', 'users.name')
                ->orderByDesc('data_poin.poin_kuis')
                ->get();
        return view('data_poin', $data);
    }

    public function store(Request $request)
    {
        $id_user = $request->input('id_user');
        $score = $request->input('score');

        $query = DB::table('data_poin')->insert([
            'id_user' => $id_user,
            'poin_kuis' => $score
        ]);

        if ($query) {
            return redirect()->route('datapoint.show')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('datapoint.show')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(int $id)
    {
        $query = DB::table('data_poin')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('datapoint.show')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('datapoint.show')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function edit(string $id)
    {
        $data['poin'] = DB::table('data_poin')
            ->join('users', 'users.id', '=', 'data_poin.id_user')
            ->select('data_poin.*', 'users.name')
            ->where('data_poin.id', $id)
            ->first();
        return view('edit_poin', $data);
    }

    public function update(Request $request, string $id)
    {
        $score = $request->input('score');

        $query = DB::table('data_poin')->where('id', $id)->update([
            'poin_kuis' => $score
        ]);

        if ($query) {
            return redirect()->route('datapoint.show')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('datapoint.show')->with('failed', 'Data Gagal Diupdate');
        }
    }

    public function exportPDF(){
        $data['poin'] = Point::join('users', 'users.id', '=', 'data_poin.id_user')
                ->select('data_poin.*', 'users.name')
                ->orderByDesc('data_poin.poin_kuis')
                ->get();
        $pdf = PDF::loadView('export', compact('poin'));
        return $pdf->download('data_skor.pdf');
    }

}
