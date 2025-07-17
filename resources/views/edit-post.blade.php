<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Postingan</h1>
    <a href="/posts">kembali</a>

     <form action="/update/{{ $posts->id}}" method="post">
        @csrf
        @method('PUT')

        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ $posts->judul }}">

        <br>

        <label for="isi">Isi:</label>
        <textarea id="isi" name="isi" rows="5">{{ $posts->isi }}</textarea>

        <br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>