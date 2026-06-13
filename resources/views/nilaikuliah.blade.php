@extends('template')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h3 class="text-center mb-4">Data Nilai Kuliah</h3>

    <a href="/nilaikuliahtambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>

        <tbody>
            @foreach($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if($n->NilaiAngka <= 40)
                        D
                    @elseif($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                        C
                    @elseif($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection