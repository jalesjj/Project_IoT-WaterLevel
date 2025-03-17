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
  
  <link href="assets/css/style.css" rel="stylesheet">
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
    <span>Water Level</span>
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
        <nav><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Dashboard</li></ol></nav>
      </div>

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">

              <!-- Persentase Air -->
              <div class="col-xxl-6 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Persentase Air <span>| Real Time</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        
                        <i class="bi bi-moisture"></i>
                      </div>
                      <div class="ps-3">
                        <h6 id="persentase-air">0%</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Liter Air -->
              <div class="col-xxl-6 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Liter Air <span>| Real Time</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-moisture"></i>
                      </div>
                      <div class="ps-3">
                        <h6 id="Liter-air">0 Liter</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Volume Air -->
<div class="col-xxl-6 col-md-6">
<div class="card info-card customers-card">
    <div class="card-body">
      <h5 class="card-title">Volume Air <span>| Real Time</span></h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-moisture"></i>
        </div>
        <div class="ps-3">
          <h6 id="volume-air">0 CM³</h6>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Tinggi Air -->
<div class="col-xxl-6 col-md-6">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Tinggi Air <span>| Real Time</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-moisture"></i>
                      </div>
                      <div class="ps-3">
                        <h6 id="tinggi-air">0 CM</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Grafik Air -->
<div class="col-xxl-12 col-xl-12">
  <div class="card info-card customers-card">
    <div class="card-body">
      <h5 class="card-title">Grafik Tinggi Air <span>| Real Time</span></h5>
    <canvas id="waterLevelChart" width="400" height="200"></canvas>
    </div>
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- AJAX Script for Real-Time Update -->
    <script>
      function fetchData() {
  fetch('data-realtime.php')
    .then(response => response.json())
    .then(data => {
      document.getElementById('persentase-air').innerText = `${data.persentase_air}%`;
      document.getElementById('Liter-air').innerText = `${data.Liter_air} Liter`;
      document.getElementById('tinggi-air').innerText = `${data.tinggi_air} cm`;
      document.getElementById('volume-air').innerText = `${data.volume_air} CM³`;
    })
    .catch(error => console.error('Error:', error));
}

setInterval(fetchData, 5000);

    </script>


<script>
    // Inisialisasi chart
var ctx = document.getElementById('waterLevelChart').getContext('2d');
var waterLevelChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [], // Data label (waktu/tanggal akan diisi di sini)
        datasets: [{
          label: 'Tinggi Air (cm)',
            data: [], // Data tinggi air
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Waktu (per 5 detik)' // Label untuk sumbu X
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Tinggi Air (cm)' // Label untuk sumbu Y
                }
            }
        }
    }
});


    // Fungsi untuk menyimpan data grafik ke Local Storage
function saveChartDataToLocalStorage() {
    const chartData = {
        labels: waterLevelChart.data.labels,
        data: waterLevelChart.data.datasets[0].data,
    };
    localStorage.setItem("chartData", JSON.stringify(chartData));
}

// Fungsi untuk memuat data grafik dari Local Storage
function loadChartDataFromLocalStorage() {
    const savedData = localStorage.getItem("chartData");
    if (savedData) {
        const chartData = JSON.parse(savedData);
        waterLevelChart.data.labels = chartData.labels;
        waterLevelChart.data.datasets[0].data = chartData.data;
        waterLevelChart.update();
    }
}

// Modifikasi fungsi updateChartData untuk menyimpan ke Local Storage
function updateChartData() {
    fetch('data-realtime.php') // Ambil data real-time dari PHP
        .then(response => response.json())
        .then(data => {
            var now = new Date().toLocaleDateString(); // Ambil tanggal saat ini (format dd/mm/yyyy)
            var waterLevel = data.tinggi_air; // Dapatkan tinggi air dari data

            // Tambahkan data baru ke grafik
            waterLevelChart.data.labels.push(now);
            waterLevelChart.data.datasets[0].data.push(waterLevel);

            // Batasi jumlah data untuk tetap menjaga grafik terlihat jelas
            if (waterLevelChart.data.labels.length > 10) {
                waterLevelChart.data.labels.shift();
                waterLevelChart.data.datasets[0].data.shift();
            }

            // Perbarui grafik
            waterLevelChart.update();

            // Simpan data ke Local Storage
            saveChartDataToLocalStorage();

            // Menyimpan data ke database
            saveDataToDatabase(waterLevel);
        });
}

// Panggil fungsi untuk memuat data dari Local Storage saat halaman dimuat
loadChartDataFromLocalStorage();

// Update grafik dan simpan data setiap 24 jam (86400000 ms = 24 jam)
   // setInterval(updateChartData, 86400000); // 24 jam dalam milidetik
setInterval(updateChartData, 5000); // 5 detik hanya percobaan saja

// Pemanggilan pertama kali ketika halaman dimuat
updateChartData();

</script>



</body>
</html>
