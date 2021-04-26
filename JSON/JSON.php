<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM barang";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'id' => $row ['id'],
                'nama_barang' => $row['nama_barang'],
                'harga_barang' => $row['harga_barang'],
            ) );
        }
        
    
    echo json_encode ( array('Data Barang' => $result) );
    }
?>