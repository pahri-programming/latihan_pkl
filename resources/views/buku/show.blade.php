<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    ID:{{ $buku['id']}} <br>
    Judul : {{$buku['judul']}} <br>
    Harga: Rp.{{number_format($buku['harga'],0,'.','.')}} <br>
    Kategori: {{$buku['kategori']}}
</body>
</html>