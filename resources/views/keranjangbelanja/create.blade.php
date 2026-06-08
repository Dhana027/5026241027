@extends('template')
@section('title', 'Data Perbelanjaan')
@section('konten')

    <div class="card">
        <div class="card-header">
            Form Tambah Data Belanja
        </div>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="card-body">
            <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                <p>
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label><br>
                    <input type="text" name="KodeBarang" id="KodeBarang" maxlength="20" value="{{ old('KodeBarang') }}"
                        class="form-control">
                </p>

                <p>
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label><br>
                    <input type="text" name="Jumlah" id="Jumlah" maxlength="10" value="{{ old('Jumlah') }}"
                        class="form-control">
                </p>

                <p>
                    <label for="Harga" class="col-sm-2 col-form-label">Harga</label><br>
                    <input type="text" name="Harga" id="Harga" maxlength="10" value="{{ old('Harga') }}"
                        class="form-control">
                </p>

                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary">Kembali</a>
            </form>

            <script>
                function validasiForm() {
                    let kodeBarang = document.getElementById('KodeBarang').value.trim();
                    let jumlah = document.getElementById('Jumlah').value.trim();
                    let harga = document.getElementById('Harga').value.trim();

                    if (kodeBarang === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kode Barang wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (kodeBarang.length > 20) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Kode Barang maksimal 20 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (jumlah === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Jumlah wajib diisi",
                            icon: "error"
                        });
                        return false;
                    }

                    if (jumlah.length > 10) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Jumlah maksimal 10 karakter",
                            icon: "error"
                        });
                        return false;
                    }

                    if (harga === '') {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Harga wajib diisi",
                            icon: "error"
                        });
                        return false;

                    }

                    return true;
                }
            </script>
        @endsection
