**Komponen Sistem**

Alat-Alat Monitoring Water Level (ukuran air):
1) Nodemcu82
2) Sensor ultrasonic
3) Led
4) Breadbroad
5) Kabel jumper
6) kabel USB

Alat - Alat Water otomatis Dispencer
1) ARDUINO UNO
2) Sensor ultrasonic
3) Relay
4) Breadbroad
5) DC MOTOR 5V
6) kabel jumper
7) kabel USB

**DATABASE**

1. buat nama database 'dbwaterlevel'
2. buat nama tabel, salin sql dibawah

   CREATE TABLE tb_tangki (
    id INT(11) NOT NULL AUTO_INCREMENT,
    tinggi INT(11) NOT NULL,
    PRIMARY KEY (id)
);
4. klik insert di tabel tb_tangki -> isi 0 di value pada column tinggi
5. buat nama tabel, salin sql dibawah

   CREATE TABLE IF NOT EXISTS grafik_air (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tinggi_air FLOAT NOT NULL COMMENT 'Tinggi air dalam cm',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
6. buat nama tabel, salin sql dibawah

   CREATE TABLE IF NOT EXISTS kritik_saran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kontak_wa VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
8. anda sudah membuat nama database dan tabel yang diperlukan
