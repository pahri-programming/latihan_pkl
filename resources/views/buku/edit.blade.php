<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Buku</h2> <hr>
    <form action="/buku/{{$buku['id']}}" method="POST">
        @csrf
        @method('PUT')
    <input type="text" name="judul" value="{{$buku['judul']}}"><br>
    <input type="number" name="harga" value="{{$buku['harga']}}" required><br>
    <select name="kategori" id="" required>
        <option value="Self Improvment" {{$buku['kategori']=='Self Improvment' ? 'selected' :''}}>Self Improvment</option>
        <option value="Bacaan" {{$buku['kategori']=='Bacaan' ? 'selected' :''}}>Bacaan</option>
        <option value="Teknologi" {{$buku['kategori']=='Teknologi' ? 'selected' :''}}>Teknologi</option>
    </select>
    <button type="submit">Simpan</button>
    |
    <button type="reset">Refresh</button>
    </form>
</body>
</html>