
# 💧 Sistem Monitoring & Dispenser Otomatis Water Level
<div align="center" >
    
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
<br>
![ESP8266](https://img.shields.io/badge/ESP8266-000000?style=for-the-badge&logo=espressif&logoColor=white)
![Arduino](https://img.shields.io/badge/Arduino-00979D?style=for-the-badge&logo=arduino&logoColor=white)
![Sensors](https://img.shields.io/badge/Sensors-007ACC?style=for-the-badge&logo=protonmail&logoColor=white)
</div>

Sistem ini terdiri dari dua bagian utama:
1. **Monitoring Tinggi Air (Water Level Monitoring)**
2. **Dispenser Air Otomatis**

Keduanya memanfaatkan teknologi mikrokontroler (NodeMCU & Arduino UNO) serta sensor ultrasonik untuk mendeteksi ketinggian air, dan dapat terintegrasi dengan database untuk penyimpanan data secara real-time.

---

## ⚙️ Komponen Sistem

### 🔍 Monitoring Water Level

| No | Komponen             |
|----|----------------------|
| 1  | NodeMCU8266          |
| 2  | Sensor Ultrasonic    |
| 3  | LED                  |
| 4  | Breadboard           |
| 5  | Kabel Jumper         |
| 6  | Kabel USB            |

![Monitoring](https://github.com/user-attachments/assets/7e20a835-bc75-4cb1-b48d-4e7e7355d563)

---

### 🚰 Dispenser Air Otomatis

| No | Komponen             |
|----|----------------------|
| 1  | Arduino UNO          |
| 2  | Sensor Ultrasonic    |
| 3  | Relay                |
| 4  | Breadboard           |
| 5  | DC Motor 5V          |
| 6  | Kabel Jumper         |
| 7  | Kabel USB            |

![Dispenser](https://github.com/user-attachments/assets/1652d8bb-6b41-4cda-a935-5cb3840f5719)

---

## 🗃️ Struktur Database

> Database: `dbwaterlevel`

### 1️⃣ Tabel `tb_tangki`

```sql
CREATE TABLE tb_tangki (
    id INT(11) NOT NULL AUTO_INCREMENT,
    tinggi INT(11) NOT NULL,
    PRIMARY KEY (id)
);
```

📌 *Langkah selanjutnya:*  
Setelah tabel dibuat, klik tab `Insert` dan masukkan nilai `0` pada kolom `tinggi`.

---

### 2️⃣ Tabel `grafik_air`

```sql
CREATE TABLE IF NOT EXISTS grafik_air (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tinggi_air FLOAT NOT NULL COMMENT 'Tinggi air dalam cm',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### 3️⃣ Tabel `kritik_saran`

```sql
CREATE TABLE IF NOT EXISTS kritik_saran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kontak_wa VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## ✅ Status

- [x] Database `dbwaterlevel` berhasil dibuat
- [x] Tabel `tb_tangki` siap digunakan
- [x] Tabel `grafik_air` untuk menyimpan data tinggi air
- [x] Tabel `kritik_saran` untuk feedback pengguna

---

> 📌 **Catatan:**  
Pastikan koneksi dari mikrokontroler ke database melalui PHP/MySQL berjalan dengan lancar. Periksa juga sensor ultrasonic secara berkala untuk menjaga akurasi pengukuran.
