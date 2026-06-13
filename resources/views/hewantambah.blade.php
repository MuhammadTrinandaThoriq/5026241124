@extends('template')

@section('title', 'Tambah Hewan')

@section('konten')

    <h3 class="text-center mb-4">Tambah Data Hewan</h3>

    <form action="/hewanstore" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Hewan</label>
            <input type="text" name="namahewan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Hewan</label>
            <input type="text" name="jumlahhewan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tersedia</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/hewan" class="btn btn-secondary">Kembali</a>
    </form>

@endsection