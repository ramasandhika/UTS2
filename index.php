<?php 
require "function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Tampilan data</h1>
    <a href="tambah_form.php">Tambah</a>
    <table width="90%" border=1 collspacing="1">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>action</th>
        </thead>
        <tbody>
            <?php 
            $no=1; 
            foreach(getData() as $data): ?>
            <tr>
                <td><?= $data["id_rama"]; ?></td>
                <td><?= $data["nama_rama"]; ?></td>
                <td><?= $data["email_rama"]; ?></td>
                <td><?= $data["alamat_rama"]; ?></td>
                <td>
                    <a href="edit_form.php?id=<?= $data["id_rama"] ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $data["id_rama"] ?>">Hapus</a>

                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>