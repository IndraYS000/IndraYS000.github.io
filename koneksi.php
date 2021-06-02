<?php

    $koneksi = mysqli_connect("localhost","root","","webhairstyle");

    mysqli_select_db($koneksi,"webhairstyle") or die ("Database Salah!");

?>