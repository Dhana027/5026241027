@extends('template')
@section('title', 'Data Masker')
@section('konten')

    <h2>Data Masker</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('masker.tambah') }}" class="btn btn-primary">Tambah Masker</a>

    <br />
    <br />

    <form action="{{ route('masker.cari') }}" method="GET" class="form-control">
        <div class="form-group">
            <label>Cari Data Masker :</label>
            <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Masukkan Merk Masker" class="form-control">
            <br />
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Masker</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>

        @forelse($masker as $row)
            <tr>
                <td>{{ $row->kode }}</td>
                <td>{{ $row->merk }}</td>
                <td>{{ $row->stock }}</td>
                <td>{{ $row->tersedia }}</td>
                <td>
                    <a href="{{ route('masker.edit', $row->kode) }}" class="btn btn-warning">Edit</a>
                    &nbsp;
                    <a href="{{ route('masker.hapus', $row->kode) }}" class="btn btn-danger"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"> Hapus </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data masker.</td>
            </tr>
        @endforelse
    </table>

    {{ $masker->links() }}

@endsection
