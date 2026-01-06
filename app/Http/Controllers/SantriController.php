<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function form()
    {
        return view('santri.form');
    }

    public function simpan(Request $request)
    {
        $santri = session()->get('santri', []);

        $santri[] = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'ortu' => $request->ortu,
            'hp' => $request->hp
        ];

        session(['santri' => $santri]);

        return redirect('/santri/daftar');
    }

    public function daftar()
    {
        $santri = session()->get('santri', []);
        return view('santri.daftar', compact('santri'));
    }
}
