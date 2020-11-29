<?php
        $id = $_POST['id'];
	$kode = $_POST['kode'];	
	$merk = $_POST['merk'];
	$jenis = $_POST['jenis'];
	$warna = $_POST['warna'];
	$hargasewa = $_POST['hargasewa'];
	
	$conn = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "UPDATE tbsepeda set kode = '$kode', merk = '$merk', jenis = '$jenis', warna = '$warna', hargasewa = '$hargasewa' WHERE id = '$id'";
	$json["hasil"]=array();
    	if(mysqli_query($conn,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>