<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi input
    $name = trim($_POST['name']);
    $nim = trim($_POST['nim']); 
    $gender = trim($_POST['gender']); 
    $dob = trim($_POST['dob']); 
    $religion = trim($_POST['religion']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $age = (int)$_POST['age'];
    $address = trim($_POST['address']); 
    $file = $_FILES['file'];

    // Validasi panjang nama
    if (strlen($name) < 3) {
        die("Nama harus minimal 3 karakter.");
    }

    // Validasi ukuran file (maksimal 1 MB)
    if ($file['size'] > 1048576) {
        die("Ukuran file maksimal adalah 1 MB.");
    }

    // Validasi tipe file
    $fileType = mime_content_type($file['tmp_name']);
    if ($fileType !== 'text/plain') {
        die("Hanya file teks (.txt) yang diperbolehkan.");
    }

    // Membaca isi file upload
    $fileContent = file($file['tmp_name']);

    // Informasi browser/sistem operasi
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Simpan data ke file `data.txt`
    $dataFile = 'data.txt';
    $newData = [
        'name' => $name,
        'nim' => $nim,
        'gender' => $gender,
        'dob' => $dob, 
        'religion' => $religion, 
        'email' => $email,
        'phone' => $phone,
        'age' => $age,
        'address' => $address, 
        'userAgent' => $userAgent,
        'fileContent' => $fileContent
    ];

    $existingData = [];
    if (file_exists($dataFile)) {
        $existingData = json_decode(file_get_contents($dataFile), true) ?? [];
    }

    $existingData[] = $newData;
    file_put_contents($dataFile, json_encode($existingData));

    // Redirect ke halaman hasil
    session_start();
    $_SESSION['data'] = $newData;
    header("Location: result.php");
}
?>
