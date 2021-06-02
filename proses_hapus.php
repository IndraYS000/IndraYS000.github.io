<?php
        session_start();

        include "koneksi.php";
    
        $username   = $_POST['username'];
        $password   = $_POST['password'];
    
        $validU= mysqli_query($host, "SELECT username FROM akun WHERE username= '$username'");
        $validP= mysqli_query($host, "SELECT password FROM akun WHERE password= '$password'");
        //$validU= mysqli_query($host, "CALL show_akun_username('$username');");
        //$validP= mysqli_query($host, "CALL show_akun_password('$password');");
        $jumU = mysqli_num_rows($validU);
        $jumP = mysqli_num_rows($validP);
        if($jumU > 0 && $jumP > 0){
            //mysqli_query($host,"DELETE FROM akun WHERE username = '$username' AND password = '$password';");
            mysqli_query($host,"CALL hapus_akun('$username','$password');");
            header("Location: index.php?pesan=sukseshapus");
            //exit();
        }    
        else {
            header("Location: hapusakun.php?gagal");
        }
?>