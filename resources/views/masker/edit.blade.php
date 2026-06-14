@extends('template')
@section('title', 'Data Masker')
@section('konten')
<a href="/masker" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Edit Data Masker
        </div>

        <div class="card-body">
            <form action="/masker/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="kode" value="{{ $masker->kode }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input 
                            type="text" 
                            name="merk" 
                            id="merk" 
                            class="form-control" 
                            required 
                            value="{{ $masker->merk }}"
                        >
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input 
                            type="number" 
                            name="stock" 
                            id="stock" 
                            class="form-control" 
                            required 
                            value="{{ $masker->stock }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="Y" {{ $masker->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="N" {{ $masker->tersedia == 'N' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection