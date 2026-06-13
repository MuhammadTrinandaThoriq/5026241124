@extends('template')

@section('title', 'Pra EAS')

@section('konten')
<h3 class="text-center mb-4">Data Hewan</h3>

<form action="/hewancari" method="GET" class="mb-3">
    <label class="form-label">Cari Data Hewan :</label>
    <input type="text" name="cari" class="form-control mb-2" placeholder="Cari nama hewan">
    <button type="submit" class="btn btn-secondary">Cari</button>
</form>

<a href="/hewantambah" class="btn btn-primary mb-3">+ Tambah Hewan</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Hewan</th>
                <th>Nama Hewan</th>
                <th>Jumlah Hewan</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($hewan as $h)
            <tr>
                <td>{{ $h->kodehewan }}</td>
                <td>{{ $h->namahewan }}</td>
                <td>{{ $h->jumlahhewan }}</td>
                <td>{{ $h->tersedia }}</td>
                <td>
                    <a href="/hewanedit/{{ $h->kodehewan }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/hewanhapus/{{ $h->kodehewan }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection