<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Postingan</h1>
    <a href="/posts">Kembali</a>
    <br><br>

    <form action="/store" method="post">
        @csrf

        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul">

        <br>

        <label for="isi">Isi:</label>
        <textarea id="isi" name="isi" rows="5"></textarea>

        <br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>