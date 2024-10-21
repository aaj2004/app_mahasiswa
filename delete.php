<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM data_mhs WHERE id = ?");
    $stmt->execute([$id]);
    $mahasiswa = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM data_mhs WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hapus Mahasiswa</title>
</head>
<body>
    <h1>Hapus Mahasiswa</h1>
    <p>Anda yakin ingin menghapus mahasiswa dengan NIM <?= $mahasiswa['nim'] ?>?</p>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
        <button type="submit">Hapus</button>
    </form>
</body>
</html>
