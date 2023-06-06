<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        Nama Barang: <input type="text" name="nama_barang"><br><br>
        Harga Barang: <input type="text" name="harga_barang"><br><br>
        Jumlah Barang: <input type="number" name="jumlah_barang"><br><br>
        Stok Barang: <input type="number" name="stok_barang"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>