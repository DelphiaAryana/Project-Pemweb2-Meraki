<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;
use App\Models\StyleModern;
use App\Models\Motif;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        $dataMotif['motif'] = Motif::all();
        $dataStyle['style'] = StyleModern::all();
        $dataPoin ['winner'] = Point::join('users', 'users.id', '=', 'data_poin.id_user')
                ->select('data_poin.*', 'users.name')
                ->orderByDesc('data_poin.poin_kuis')
                ->take(3)
                ->get();
        return view('home', [
            'motif' => $dataMotif['motif'],
            'style' => $dataStyle['style'],
            'winner' => $dataPoin['winner']
        ]);
    }
}
