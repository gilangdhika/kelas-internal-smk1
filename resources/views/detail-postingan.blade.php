<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Postingan</h1>

    <a href="/posts">Kembali</a>

    <h2>{{ $post->judul }}</h2>
    <p>{{ $post->isi }}</p>
</body>
</html>