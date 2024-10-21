<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $program_studi = $_POST['program_studi'];
    $angkatan = $_POST['angkatan'];
    $kontak = $_POST['kontak'];

    $stmt = $pdo->prepare(" INSERT INTO mahasiswa (nama, nim, program_studi, angkatan, kontak) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nama, $nim, $program_studi, $angkatan, $kontak]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br><br>
        <label for="program_studi">Program Studi:</label>
        <input type="text" id="program_studi" name="program_studi"><br><br>
        <label for="angkatan">Angkatan:</label>
        <input type="number" id="angkatan" name="angkatan"><br><br>
        <label for="kontak">Kontak:</label>
        <input type="tel" id="kontak" name="kontak"><br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>