<?php
    $id = $_POST['id'];
    $kode = $_POST['kode'];

	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "DELETE FROM tbsepeda where id='$id' and kode='$kode'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>