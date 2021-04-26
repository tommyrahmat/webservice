<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","dbbarang") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke data array
$data = json_decode($jsondata, true);

//mendapatkan data barang
$id= $data['id'];
$nama_barang = $data['nama_barang'];
$harga_barang= $data['harga_barang'];


//insert data ke table tbl_emp 
$sql = "INSERT INTO barang(id,nama_barang,harga_barang)
VALUES('$id','$nama_barang','$harga_barang')";
if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>