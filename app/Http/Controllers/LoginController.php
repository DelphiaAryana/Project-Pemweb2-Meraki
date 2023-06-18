<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function show()
    {

        return view('login');
    }

    public function showKuis()
    {
        $data['users'] = User::all();
        return view('loginkuis', $data);
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'])->onlyInput('email');
    }

    public function authKuis(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $dataUser = DB::table('users')->where('email', $request->email)->first();
        // $dataPoin['poin'] = DB::table('data_poin')->where('id_user', $dataUser->id)->first();

        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            DB::table('data_poin')->where('id_user', $dataUser->id)->delete();
            return redirect()->intended('kuis');
        }

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }


}
