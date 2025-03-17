
<?php
    // Koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

    // Baca isi tabel tangki
    $sql = mysqli_query($konek, "SELECT * FROM tb_tangki");
    $data = mysqli_fetch_array($sql);

    $tinggi_max_tangki = 37;    // Tinggi maksimal tangki dalam cm
    $volume_max_liter = 3;      // Volume maksimal air dalam liter

    // Ukur tinggi air = tinggi max tangki - jarak permukaan air dengan sensor
    $tinggi_air = $tinggi_max_tangki - $data['tinggi']; // Data dari tabel dalam cm

    // Pastikan tinggi air tidak negatif
    if ($tinggi_air < 0) {
        $tinggi_air = 0;
    }

    // Hitung prosentase ketinggian air
    $prosentase_tinggi_air = ($tinggi_air / $tinggi_max_tangki) * 100;

    // Hitung volume air (dalam liter) secara proporsional
    // Rumus: (tinggi_air / tinggi_max_tangki) * volume_max_liter
    $liter = ($tinggi_air / $tinggi_max_tangki) * $volume_max_liter;

    // Pastikan liter air tidak negatif dan tidak melebihi volume maksimal
    if ($liter < 0) {
        $liter = 0;
    } elseif ($liter > $volume_max_liter) {
        $liter = $volume_max_liter;
    }
?>


<!-- Pegangan penutup -->
<div class="pegangan"></div>
<!-- Penutup tangki -->
<div class="penutup"></div>
<!-- Body tangki air -->
<div class="tangki">
    <!-- Tampilan air -->
    <div class="air" style="width: 100%; height: <?php echo $prosentase_tinggi_air; ?>%;">

        <!-- Tampilkan informasi tinggi air, volume air, dan liter -->
        <?php 
            echo "Tinggi Air: " . $tinggi_air . " cm";
            echo "<br>";
            echo "Liter Air: " . number_format($liter, 2) . " Liter"; // Format liter dengan 2 desimal
            echo "<br>";
            echo "Persentase Air: " . number_format($prosentase_tinggi_air, 2) . "%"; // Format persen dengan 2 desimal
        ?>
    </div>
</div>