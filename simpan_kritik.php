<?php
// Sambungkan ke database
$host = 'localhost'; // Sesuaikan dengan pengaturan Anda
$user = 'root'; // Sesuaikan dengan pengaturan Anda
$password = ''; // Sesuaikan dengan pengaturan Anda
$database = 'dbwaterlevel'; // Sesuaikan dengan nama database Anda

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$kontak_wa = $_POST['kontak_wa'];
$pesan = $_POST['pesan'];

// Simpan ke database
$sql = "INSERT INTO kritik_saran (nama, kontak_wa, pesan) VALUES ('$nama', '$kontak_wa', '$pesan')";
if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Kritik dan saran sudah terkirim!');
            window.location.href = 'pages-contact.html'; // Ganti dengan halaman yang sesuai
        </script>";
} else {
    echo "<script>
            alert('Gagal mengirim kritik dan saran: " . $conn->error . "');
            window.history.back();
        </script>";
}

$conn->close();
?>
