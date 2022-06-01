<?php
include "koneksi/koneksi.php";

if (isset($_POST["update"])) {
        $No =$_POST['No'];
        $Nama =$_POST['Nama'];
        $NIS = $_POST['NIS'];
        $Kelas =$_POST['Kelas'];
        $Password =$_POST['Password'];
        $status = $_POST['status'];
        // $status = isset($_POST['status'])$_POST['status'] : '0';
        
        // if(isset($_POST['password'])){
        //     if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        //         echo "<script>alert('Passowrd Anda Lemah')</script>";
        //     }else{
        //         echo 'Strong password.';
        //     }
        // }