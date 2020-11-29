<?php
	$id = $_POST['id'];	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$noktp = $_POST['noktp'];

	$conn = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "UPDATE tbuser set email = '$email', nama = '$nama', nohp = '$nohp',noktp = '$noktp',alamat = '$alamat' WHERE id = '$id'";
	$json["hasil"]=array();
    	if(mysqli_query($conn,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>