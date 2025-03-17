<?php
// Koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

if (!$konek) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ambil data terbaru dari tabel tb_tangki
$sql = mysqli_query($konek, "SELECT * FROM tb_tangki ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($sql);

// Tinggi maksimum tangki dan kapasitas maksimum dalam liter
$tinggi_max_tangki = 37;  // cm
$Liter_max_liter = 3;     // liter

// xMenghitung data berdasarkan tinggi air
$tinggi_air = $data ? max(0, $tinggi_max_tangki - $data['tinggi']) : 0;
$persentase_air = ($tinggi_air / $tinggi_max_tangki) * 100;
$Liter_air = ($tinggi_air / $tinggi_max_tangki) * $Liter_max_liter;

// Menghitung volume dalam cm³ (contoh: area dasar tangki tetap)
$base_area = 100;  // cm²
$volume_air = $tinggi_air * $base_area;

// Menyisipkan data ke tabel grafik_air
$insert_sql = "INSERT INTO grafik_air (tinggi_air) VALUES ('$tinggi_air')";
if (mysqli_query($konek, $insert_sql)) {
    // Data berhasil disimpan
} else {
    echo "Error: " . $insert_sql . "<br>" . mysqli_error($konek);
}

// Mengembalikan data dalam format JSON untuk digunakan oleh JavaScript
echo json_encode([
    'persentase_air' => round($persentase_air, 2),
    'Liter_air' => round($Liter_air, 2),
    'tinggi_air' => round($tinggi_air, 2),
    'volume_air' => round($volume_air, 2)
]);

// Tutup koneksi database
mysqli_close($konek);
?>
