<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM mahasiswa");
$mahasiswas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="create.php">Tambah Mahasiswa</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswas as $mahasiswa): ?>
                <tr>
                    <td><?= $mahasiswa['id'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['program_studi'] ?></td>
                    <td><?= $mahasiswa['angkatan'] ?></td>
                    <td><?= $mahasiswa['kontak'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $mahasiswa['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $mahasiswa['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>