<script>
document.querySelector('form').addEventListener('submit', function (e) {
    const nama = document.getElementById('nama').value.trim();
    const kontakWa = document.getElementById('kontak_wa').value.trim();
    const pesan = document.getElementById('pesan').value.trim();
    
    if (!nama || !kontakWa || !pesan) {
    e.preventDefault();
    alert('Semua kolom wajib diisi!');
    } else if (!/^\d+$/.test(kontakWa)) {
    e.preventDefault();
    alert('Nomor WhatsApp hanya boleh berupa angka!');
    }
});
</script>
