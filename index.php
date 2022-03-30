<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kata Sandi Express</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">

</head>
<body>

    <div class="container">
        <h1>Kata Sandi Ekspres</h1>
        <input type="text" id="kolom" class="kolom" value="<?php include('acak.php') ?>" disabled>
        <button class="tombol tombol-kuning" onclick="reload()"><i class="fa fa-refresh fa-spin"></i></button>
        <button class="tombol tombol-aqua" onclick="salin()"><i class="fa fa-copy"></i></button>
        <p>Source code is on my <i class="fa-brands fa-github"></i> <a href="https://github.com/hengkidh/kata_sandi_ekspres">GitHub</a></p>
    </div>


    <script src="salin.js"></script>

</body>
</html>