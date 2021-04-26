<?php
include ('koneksi2.php');
$xml = simplexml_load_file('data.xml'); //parse the xml file into object
foreach( $xml->children() as $dbbarang) 
{
$id = $dbbarang->id; //get the childnode id
$nama_barang = $dbbarang->nama_barang; //get the child node nama barang
$harga_barang = $dbbarang->harga_barang; //get the child node harga barang
echo 'ID : '.$id.'<br />';
echo 'Nama Barang : '.$nama_barang.'<br />';
echo 'Harga Barang : '.$harga_barang.'<br />';
echo '<br>';
$query = "INSERT INTO barang
        VALUES ('', '$id','$nama_barang','$harga_barang') ";
   mysqli_query($koneksi, $query);
}
?>