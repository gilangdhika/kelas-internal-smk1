<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="width: 100%;" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post) 
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->isi}}</td>
                <td>
                    <a href="/edit-post/{{ $post->id }}">Edit</a>
                    <a href="/detail-post/{{ $post->id }}">Detail</a>
                    {{-- <a href="#">Delete</a> . --}}
                    <form action="/delete-post/{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit"onclick="return confirm ('apakah anda yakin ingin menghapus ??');">Delete
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/edit-post">pergi ke edit-post</a>
    <br>
    <a href="/tambah-post">pergi ke tambah-post</a>

</body>

</html>
