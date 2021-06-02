<?php
        session_start();

        include "koneksi.php";
    
        $oldusername   = $_POST['oldusername'];
        $oldpassword   = $_POST['oldpassword'];
        $newusername   = $_POST['newusername'];
        $newpassword   = $_POST['newpassword'];
    
        $validU= mysqli_query($host, "SELECT username FROM akun WHERE username= '$oldusername'");
        $validP= mysqli_query($host, "SELECT password FROM akun WHERE password= '$oldpassword'");
        //$validU= mysqli_query($host, "CALL show_akun_username('$oldusername');");
        //$validP= mysqli_query($host, "CALL show_akun_password('$oldpassword');");
        $jumU = mysqli_num_rows($validU);
        $jumP = mysqli_num_rows($validP);
        if($jumU > 0 && $jumP > 0){
            //mysqli_query($host,"UPDATE akun SET username= '$newusername', password='$newpassword' WHERE username='$oldusername' AND password='$oldpassword';");
            mysqli_query($host,"CALL update_akun('$oldusername','$oldpassword','$newusername','$newpassword');");
            echo "<script>alert('Update akun berhasil!');</script>";
            header("Location: index.php?pesan=suksesedit");
            //exit();
        }    
        else {
            header("Location: editakun.php?gagal");
        }
?>