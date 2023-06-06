<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>nama_barang</td>
            <td>harga_barang</td>
            <td>jumlah_barang</td>
            <td>stok_barang</td>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->harga_barang}}</td>
            <td>{{$data->jumlah_barang}}</td>
            <td>{{$data->stok_barang}}</td>
            <td><a href="/hapus_barang/{{$data->id}}">hapus</a> 
            <a href="/edit_barang/{{$data->id}}">edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>