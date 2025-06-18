<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($barang && $kode)
        menampilkan promo untuk <strong>{{$barang}}</strong> 
        Dengan Kode Promo <strong>{{$kode}}</strong>
    @elseif($barang)
        menampilkan Promo untuk <strong>{{$barang}}</strong>
    @else
    Menampilkan Semua Promo Barang
    @endif
</body>
</html>