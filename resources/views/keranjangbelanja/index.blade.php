@extends('template')
@section('title', 'Data Perbelanjaan')
@section('konten')

    <h2>Data Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('keranjangbelanja.create') }}" class="btn btn-primary">Beli</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($belanja as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data perbelanjaan.</td>
            </tr>
        @endforelse
    </table>
@endsection