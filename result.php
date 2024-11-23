<?php
// Baca data dari file `data.txt`
$dataFile = 'data.txt';
$allData = [];
if (file_exists($dataFile)) {
    $allData = json_decode(file_get_contents($dataFile), true) ?? [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Hasil Pendaftaran Mahasiswa Informatika ITERA</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Browser/Sistem Operasi</th>
            <th>Isi File</th>
        </tr>
        <?php foreach ($allData as $index => $data): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($data['name']) ?></td>
            <td><?= htmlspecialchars($data['nim']) ?></td>
            <td><?= htmlspecialchars($data['gender']) ?></td>
            <td><?= htmlspecialchars($data['dob']) ?></td>
            <td><?= htmlspecialchars($data['religion']) ?></td>
            <td><?= htmlspecialchars($data['email']) ?></td>
            <td><?= htmlspecialchars($data['phone']) ?></td>
            <td><?= htmlspecialchars($data['age']) ?></td>
            <td><?= htmlspecialchars($data['address']) ?></td>
            <td><?= htmlspecialchars($data['userAgent']) ?></td>
            <td>
                <ul>
                    <?php foreach ($data['fileContent'] as $line): ?>
                    <li><?= htmlspecialchars($line) ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Tambahkan tombol kembali -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="form.php" class="button">Kembali ke Form</a>
    </div>
</body>
</html>
