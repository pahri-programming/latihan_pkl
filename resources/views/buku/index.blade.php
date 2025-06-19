<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Data Buku</h2>
    <hr>
    <a href="buku/create">tambah</a>
    <table>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Harga</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($buku as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data['judul']}}</td>
                <td>{{$data['harga']}}</td>
                <td>{{$data['kategori']}}</td>
                <td>
                    <a href="/buku/{{$data['id']}}">Show</a> |
                    <a href="/buku/{{$data['id']}}/edit">Edit</a> |
                    <form action="/buku/{{$data['id']}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('apakah anda yakin')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>