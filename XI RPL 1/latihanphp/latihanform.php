<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Form</title>
</head>
<body>
    <form action="" method="POST" name="input">
        Nama Anda : <input type="text" name="nama"><br>
        Nilai 1 : <input type="text" name="nilai1"><br>
        Nilai 2 : <input type="text" name="nilai2"><br>
        <input type="submit" name="input" value="input">
        <input type="reset" value="hapus">
        <br>
    </form>
</body>
</html>

<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        echo "Nama Anda : <b>$nama</b><br>";
        echo "Nilai 1 : <b>$nilai1</b><br>";
        echo "Nilai 2 : <b>$nilai2</b><br>";
        $rata = ($nilai1+$nilai2)/2;
        echo "Rata Rata : <b>$rata</b>";
    }


?>