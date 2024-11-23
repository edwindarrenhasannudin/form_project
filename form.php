<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>💻 Form Pendaftaran Mahasiswa Informatika ITERA 📋</h1>
    <form action="process.php" method="POST" enctype="multipart/form-data" id="registrationForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required minlength="3">
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required placeholder="Masukkan NIM">

        <label for="gender">Jenis Kelamin:</label>
        <select id="gender" name="gender" required>
            <option value="">Pilih jenis kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="dob">Tanggal Lahir:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="religion">Agama:</label>
        <select id="religion" name="religion" required>
            <option value="">Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}">
        
        <label for="age">Usia:</label>
        <input type="number" id="age" name="age" required min="18" max="100">

        <label for="address">Alamat:</label>
        <textarea id="address" name="address" rows="3" required></textarea>
        
        <label for="file">Upload File (TXT):</label>
        <input type="file" id="file" name="file" required accept=".txt">
        
        <button type="submit">Kirim</button>

        <div style="text-align: center; margin-top: 20px;">
            <a href="result.php" class="button">Lihat Hasil</a>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>
