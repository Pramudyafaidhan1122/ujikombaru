<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.navbar')
    
    <div class="jumbotron text-center">
        <h1>KASIR</h1>
        <p>DATA PRODUK</p>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3>NAMA PRODUK</h3>
            <p>INDOMEI</p>
          </div>
          <div class="col-sm-4">
            <h3>HARGA</h3>
            <p>3000</p>
          </div>
          <div class="col-sm-4">
            <h3>STOK</h3>
            <p>20</p>
          </div>
        </div>
          <a href="{{url('logout')}}">logout</a>
      </div>
  
</body>
</html>