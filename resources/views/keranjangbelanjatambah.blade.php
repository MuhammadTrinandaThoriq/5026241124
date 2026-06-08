<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Keranjang Belanja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h3 class="text-center mb-4">Tambah Data Keranjang Belanja</h3>

    <form action="/keranjangbelanjastore" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="number" name="KodeBarang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Pembelian</label>
            <input type="number" name="Jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga per Item</label>
            <input type="number" name="Harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Beli</button>
        <a href="/keranjangbelanja" class="btn btn-secondary">Kembali</a>
    </form>

</div>

</body>
</html>