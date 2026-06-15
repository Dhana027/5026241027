@extends('template')
@section('title', 'Kode Soal nilai_peserta')
@section('konten')

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai_Peserta
        </div>

        <div class="card-body">
            <form action="{{ route('npeas.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nopeserta" class="col-sm-2 col-form-label">Nomor Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeserta" id="nopeserta" maxlength="5" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiteori" id="nilaiteori" maxlength="11" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaipraktek" id="nilaipraktek" maxlength="11" class="form-control" required>
                    </div>
                </div>

                <input type="submit" value="Simpan" class="btn btn-primary">
                <a href="{{ route('npeas.eas') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
