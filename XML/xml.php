<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "dbbarang") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from barang ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('barang');
    $track->addChild('id', $row['id']);
    $track->addChild('nama_barang', $row['nama_barang']);
    $track->addChild('harga_barang', $row['harga_barang']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>