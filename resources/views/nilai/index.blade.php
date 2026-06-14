@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <h2>Data Nilai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Nilai</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilais as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nrp }}</td>
                <td>{{ $row->nilaiangka }}</td>
                <td>{{ $row->sks }}</td>
                <td>
                    @if ($row->nilaiangka >= 81)
                        A
                    @elseif ($row->nilaiangka >= 61)
                        B
                    @elseif ($row->nilaiangka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ $row->nilaiangka * $row->sks }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data nilai.</td>
            </tr>
        @endforelse
    </table>
@endsection