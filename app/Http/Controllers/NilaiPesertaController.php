<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiPesertaController extends Controller
{
    public function index()
    {
        $nilais = DB::table('nilai_peserta')->orderBy('ID')->get();
        return view('npeas.eas', compact('nilais'));
    }

    public function create()
    {
        return view('npeas.eastambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta' => 'required|string|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect()->route('npeas.eas')->with('success', 'Data nilai berhasil ditambahkan.');
    }
}