<?php
// Menghubungkan ke database
$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data yang dikirim melalui POST
$data = json_decode(file_get_contents("php://input"), true);

// Ambil tanggal dan tinggi air dari data
$tanggal = $data['tanggal'];
$tinggi_air = $data['tinggi_air'];

// Cek apakah sudah ada data untuk tanggal tersebut
$check_sql = "SELECT * FROM grafik_air WHERE tanggal = '$tanggal'";
$check_result = mysqli_query($konek, $check_sql);

if (mysqli_num_rows($check_result) == 0) {
    // Jika belum ada, simpan data
    $insert_sql = "INSERT INTO grafik_air (tanggal, tinggi_air) VALUES ('$tanggal', '$tinggi_air')";
    if (mysqli_query($konek, $insert_sql)) {
        echo json_encode(["status" => "success", "message" => "Data berhasil disimpan"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menyimpan data"]);
    }
} else {
    echo json_encode(["status" => "info", "message" => "Data untuk tanggal ini sudah ada"]);
}

// Tutup koneksi database
mysqli_close($konek);
?>
