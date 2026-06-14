<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MaskerController extends Controller
{
    public function index()
    {
        $masker = DB::table('masker')->paginate(10);
        return view('masker.index', ['masker' => $masker]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table masker sesuai pencarian data
		$masker = DB::table('masker')
		->where('merk','like',"%".$cari."%")
		->paginate(10)
        ->appends(['cari' => $cari]);
 
    		// mengirim data masker ke view index
		return view('masker.index', compact('masker', 'cari'));
 
	}

    public function tambah()
    {
        return view('masker.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:30',
            'stock' => 'required|integer',
            'tersedia' => 'required',
        ]);

        DB::table('masker')->insert([
            'merk' => $request->merk,
            'stock' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('masker.index')->with('success', 'Data masker berhasil ditambahkan.');
    }

    public function edit($id) 
    {
        $masker = DB::table('masker')
            ->where('kode', $id)
            ->first();

        return view('masker.edit', compact('masker'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'merk' => 'required|string|max:30',
            'stock' => 'required|integer',
            'tersedia' => 'required',
        ]);
        
        DB::table('masker')
            ->where('kode', $request->kode)
            ->update([
                'merk' => $request->merk,
                'stock' => $request->stock,
                'tersedia' => $request->tersedia
            ]);

        return redirect()->route('masker.index')
            ->with('success', 'Data masker berhasil diupdate.');
    }

    public function hapus($id)
    {
        DB::table('masker')->where('kode', $id)->delete();

        return redirect()->route('masker.index')->with('success', 'Data masker berhasil dihapus.');
    }
}