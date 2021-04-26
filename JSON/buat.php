<?php

    require_once('koneksi.php');

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
   

    $query = "INSERT INTO barang(id,nama_barang,harga_barang)VALUES('$id','$nama_barang','$harga_barang')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>