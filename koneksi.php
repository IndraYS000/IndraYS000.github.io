<?php

    $host = mysqli_connect("localhost","root","","webhairstyle");

    mysqli_select_db($host,"webhairstyle") or die ("Database Salah!");

?>