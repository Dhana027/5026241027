@extends('template')
@section('title', 'Kode Soal nilai_peserta')
@section('konten')

    <h2>Tabel nilai_peserta</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('npeas.eastambah') }}" class="btn btn-primary">Tambah Data Nilai</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-Rata</th>
            <th>Status</th>
        </tr>

        @forelse($nilais as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->nopeserta }}</td>
                <td>{{ $row->nilaiteori }}</td>
                <td>{{ $row->nilaipraktek }}</td>
                <td>
                    @php
                        $rataRata = ($row->nilaiteori + $row->nilaipraktek) / 2;
                    @endphp
                    {{ $rataRata }}
                </td>
                @if ($rataRata >= 75)
                    <td style="background-color: green;" class="text-white p-2">
                        Lulus
                    </td>
                @else
                    <td style="background-color: red;" class="text-white p-2">
                        Gagal
                    </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data nilai.</td>
            </tr>
        @endforelse
    </table>
@endsection
