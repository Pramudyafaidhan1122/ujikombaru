<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
@include('layout.navbar')
<div class="produk">
<div class="container">
<h1>PRODUK</h1>

<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Produk ID</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $produk)
            <tbody>
                <tr>
                    <th>{{$produk->ProdukID}}</th>
                    <td>{{$produk->NamaProduk}}</th>
                    <td>{{$produk->Harga}}</th>
                    <td>{{$produk->Stok}}</th>
                    <td>
                        <button type="button" class="btn btn-outline-light">hapus</button>
                        <button type="button" class="btn btn-outline-light">update</button>

                    </td>

                </tr>
            @endforeach
            </table>
        </div>
        </div>
        </body>
        </html>
