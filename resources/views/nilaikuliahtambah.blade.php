@extends('template')

@section('title', 'Tambah Nilai Kuliah')

@section('konten')

    <h3 class="text-center mb-4">Tambah Data Nilai Kuliah</h3>

    <form action="/nilaikuliahsimpan" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">NRP</label>
            <input type="text" name="NRP" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nilai Angka</label>
            <input type="text" name="NilaiAngka" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">SKS</label>
            <input type="text" name="SKS" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
    </form>

@endsection