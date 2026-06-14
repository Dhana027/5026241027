@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai
        </div>

        <div class="card-body">
            <form action="{{ route('nilai.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nrp" id="nrp" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiangka" id="nilaiangka" maxlength="11" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="sks" id="sks" maxlength="11" class="form-control">
                    </div>
                </div>

                <input type="submit" value="Simpan" class="btn btn-primary">
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
