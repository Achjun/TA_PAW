<?php
session_start();

require_once 'conn.php';
require_once 'base.php';

// User Login
function login(array $data){
    $username = $_POST['nisn'];
    $passwd = $_POST['password'];
    $user = DBC->prepare("SELECT * FROM users WHERE USERNAME = :username AND PASSWORD = :pass");
    $user->execute([
        ':username'=>$username,
        ':pass' => md5($passwd)
    ]);
    if($user->rowCount() == 1){
        $data_admin = $user->fetch();
        if($data_admin['ROLE'] == 1)
        // $_SESSION['admin_login'] = $data_admin['ID_ADMIN'];
        // $_SESSION['nama'] = $data_admin['NAMA_ADMIN'];
        header("Location:Admin/index.php");
    }else{
        header("Location:login.php");
    }
}


// Register
function register($array){
    $cek = cekNISN($array['nisn']);
    if($cek == 0){
        $register = DBC->prepare("INSERT INTO siswa (NISN, NAMA_SISWA, PASSWORD_SISWA) VALUES (:nisn, :nama, :pass)");
        $register->execute([
            ':nisn' => $array['nisn'],
            ':nama' => $array['nama'],
            ':pass' => md5($array['password'])
        ]);
    }else{
        echo "Nisn Sudah Terdaftar";
    }
}

// Cek Ketersediaan NISN
function cekNISN($nisn){
    $cek = DBC->prepare("SELECT NISN FROM siswa WHERE NISN = :nisn");
    $cek->execute([':nisn'=>$nisn]);
    return $cek->rowCount();
}
