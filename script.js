document.getElementById("registrationForm").addEventListener("submit", function (e) {
    const fileInput = document.getElementById("file");
    const file = fileInput.files[0];

    // Validasi ukuran file (maksimal 1 MB)
    if (file.size > 1048576) {
        alert("Ukuran file maksimal adalah 1 MB.");
        e.preventDefault();
        return;
    }

    // Validasi tipe file
    if (file.type !== "text/plain") {
        alert("Hanya file teks (.txt) yang diperbolehkan.");
        e.preventDefault();
    }
});
