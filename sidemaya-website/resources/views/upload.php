<x-app-layout>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $uploadDir = 'storage/app/private/dokumenwarga';

    // Pastikan folder upload ada atau buat jika belum ada
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $allowedExtensions = ['pdf'];  // Ekstensi file yang diizinkan

    $uploadedFile = $uploadDir . basename($_FILES["file"]["name"]);
    $fileExtension = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));

    // Memeriksa tipe file
    if (in_array($fileExtension, $allowedExtensions)) {
        // Mengunggah file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadedFile)) {
            // Mengatur pesan sukses untuk ditampilkan di halaman utama
            session_start();
            $_SESSION['upload_success'] = true;

            header("Location: ajukansurat");
            exit();
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        // Menampilkan pop-up kesalahan dan mengarahkan pengguna kembali
        echo "<script>alert('Hanya file PDF yang diizinkan untuk diunggah.'); history.go(-1);</script>";
        exit();
    }
}
?>
</x-app-layout>
