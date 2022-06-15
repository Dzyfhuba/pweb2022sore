<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/students" method="post">
        @csrf
        <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas">
        </div>
        <button type="submit">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>KELAS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
