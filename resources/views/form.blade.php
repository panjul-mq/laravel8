<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel 8</title>
</head>
<body>
    @if ($name ?? '')
        <h1>Hello my name is {{$name}}</h1><br>
        <img src={{ Storage::url('public/user/') . $image  }}>
    @else 
        <form action="proses"method="post" enctype="multipart/form-data">
            @csrf
            <label for="nama">Masukan Nama</label>
            <input type="text"name="nama">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="">
            <input type="submit" value="kirim">
        </form>
    @endif
</body>
</html>