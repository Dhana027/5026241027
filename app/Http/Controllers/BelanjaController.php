<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('belanja'));
    }

    public function create()
    {
        $nextId = DB::table('keranjangbelanja')->max('ID') + 1;
        return view('keranjangbelanja.create', compact('nextId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|integer',
        ]);

        DB::table('keranjangbelanja')->insert([
            'ID' => $request->ID,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data belanja berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data belanja berhasil dihapus.');
    }
}