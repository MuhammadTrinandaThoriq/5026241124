@extends('template')

@section('title', 'Edit Hewan')

@section('konten')

    <h3 class="text-center mb-4">Edit Data Hewan</h3>

    <form action="/hewanupdate" method="POST">
        @csrf

        <input type="hidden" name="kodehewan" value="{{ $hewan->kodehewan }}">

        <div class="mb-3">
            <label class="form-label">Nama Hewan</label>
            <input type="text" name="namahewan" class="form-control" value="{{ $hewan->namahewan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Hewan</label>
            <input type="text" name="jumlahhewan" class="form-control" value="{{ $hewan->jumlahhewan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tersedia</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1" value="{{ $hewan->tersedia }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/hewan" class="btn btn-secondary">Kembali</a>
    </form>

@endsection