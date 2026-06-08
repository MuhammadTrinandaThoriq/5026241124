<!DOCTYPE html>
<html>
<head>
    <title>Data Keranjang Belanja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h3 class="text-center mb-4">Data Keranjang Belanja</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanjatambah" class="btn btn-warning btn-sm">Beli</a>
                    <a href="/keranjangbelanjahapus/{{ $k->ID }}" class="btn btn-danger btn-sm">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>