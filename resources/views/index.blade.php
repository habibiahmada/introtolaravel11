<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas copas tampilan web</title>
    <style>
        .tombol{
            background-color: lightblue;
            position: absolute;
            padding: 5%;
            border-radius: 10px;
            top: 30px;
            right: 50px;
        }
        .tombol a {
            color: blue;
            text-decoration: none;
            font-size: 50px
        }
    </style>
</head>
<body>
    <h1>Media Online</h1>
    <h3>Sosial Media Developer</h3>
    <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
    <h3>Benefit join di Media Online</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h3>Cara Bergabung ke Media Online</h3>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftarkan di <a href="{{ route('form') }}">Form Sign Up</a></li>
        <li>Selesai</li>

        <div class="tombol">
            <a href="{{ route('temp') }}">Form film</a>
        </div>
    </ol>
</body>
</html>