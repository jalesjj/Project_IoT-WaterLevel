<?php
// Koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

if (!$konek) {
    die("Connection failed: " . mysqli_connect_error());
}

// Proses Hapus Semua Data
if (isset($_POST['hapus_semua'])) {
    $delete_sql = "DELETE FROM grafik_air";
    if (mysqli_query($konek, $delete_sql)) {
        echo "<script>alert('Semua data berhasil dihapus!'); window.location.href='history.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus semua data.');</script>";
    }
}

// Proses Hapus Data Tertentu
if (isset($_POST['hapus_terpilih'])) {
    $id = $_POST['id'];
    $delete_sql = "DELETE FROM grafik_air WHERE id = $id";
    if (mysqli_query($konek, $delete_sql)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='history.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data.');</script>";
    }
}

// Ambil data dari tabel grafik_air
$query = "SELECT * FROM grafik_air ORDER BY id DESC";
$result = mysqli_query($konek, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Monitoring</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Nunito|Poppins" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/2style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">water level</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/logo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Kelompok 2</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kelompok 2</h6>
              <span>Web IoT</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="monitoring.php">
      <i class="bi bi-moisture"></i>
      <span>Monitoring</span>
    </a>
  </li><!-- End monitoring Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="history.php">
      <i class="bi bi-clock-history"></i>
      <span>History</span>
    </a>
  </li><!-- End history Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

</ul>

</aside><!-- End Sidebar-->

    <!-- Main Content -->
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav><ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">History</li>
        </ol></nav>
      </div>

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">

              <!-- History data -->
              <div class="container mt-5">
    <h1 class="text-center">History Data</h1>
    <form method="post">
        <button type="submit" name="hapus_semua" class="btn btn-danger mb-3" onclick="return confirm('Apakah Anda yakin ingin menghapus semua data?')">Hapus Semua Data</button>
    </form>
    <!-- Tambahkan wrapper dengan kelas 'table-scroll' -->
    <div class="table-scroll">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Persentase Air</th>
                <th>Liter Air</th>
                <th>Volume Air</th>
                <th>Tinggi Air</th>
                <th>Tanggal</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $tinggi_air = $row['tinggi_air'];
                    $tinggi_max_tangki = 35;
                    $Liter_max_liter = 3;
                    $base_area = 100;

                    $persentase_air = ($tinggi_air / $tinggi_max_tangki) * 100;
                    $Liter_air = ($tinggi_air / $tinggi_max_tangki) * $Liter_max_liter;
                    $volume_air = $tinggi_air * $base_area;

                    echo "<tr>
                        <td>{$no}</td>
                        <td>" . round($persentase_air, 2) . " %</td>
                        <td>" . round($Liter_air, 2) . " L</td>
                        <td>" . round($volume_air, 2) . " cm^3</td>
                        <td>" . round($tinggi_air, 2) . " cm</td>
                        <td>{$row['created_at']}</td>
                        <td>
                            <form method='post' style='display: inline;'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' name='hapus_terpilih' class='btn btn-sm btn-danger' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</button>
                            </form>
                        </td>
                    </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>Tidak ada data tersedia</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>


            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer">
      <div class="copyright">Tugas Workshop Pemrograman Web</div>
    </footer>





</body>
</html>
