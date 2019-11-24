<?php
require 'server_init.php';

if (isset($_POST['quotes'])){
    
    $url = "http://odokan.com/valentine/";
    

	
	$target_path ="valentineimage/";
	$target_path_gift ="gift/";
	$target_file_jpeg =$target_path . basename($_FILES["jpeg"]["name"]);
	$target_file_gif= $target_path . basename($_FILES["gif"]["name"]);
	$target_file_gift=$target_path_gift . basename($_FILES["gift"]["name"]);
	
	$gif_img = $url.$target_file_gif;
	$jpeg_img = $url.$target_file_jpeg;
	$gift_img = $url.$target_file_gift;
	
	
	
	$quotes =$_POST['quotes'];
	$eliminate = addslashes($quotes);
	

	$query= "INSERT INTO valentine(quotes, jpeg, gif, gift) VALUES ('$eliminate', '$jpeg_img',
	'$gif_img','$gift_img')";

	$result = mysqli_query($conn, $query);
	if($result){
		if(move_uploaded_file($_FILES ["jpeg"]["tmp_name"],$target_file_jpeg) && move_uploaded_file($_FILES ["gif"]["tmp_name"],$target_file_gif)&& move_uploaded_file($_FILES ["gift"]["tmp_name"],$target_file_gift)){
			$JSON['success']="success";
			echo json_encode($JSON);
		}else{
			$JSON['unsuccess']="unsuccess";
			echo json_encode($JSON);
		}
	}else{
		$JSON['unsuccess_upload']="unsuccess file upload";
		echo json_encode($JSON);
	}
}
?>