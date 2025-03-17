<?php

    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

    //baca nilai tinggi yang dikirm oleh nodemcu
    $tinggi = $_GET['tinggi'];

    //simpan / update ke table tb_tangki field tinggi
    mysqli_query($konek, "UPDATE tb_tangki SET tinggi='$tinggi'");
?>