<?php
		$userid = $_POST['userid'];
		$type = $_POST['type'];
    $target_path  = "./upload/".$userid."/".$type."/";//接收文件目录  
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);  
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {  
       echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded to \"".$target_path."\"";  
    }  else{  
       echo "There was an error uploading the file, please try again!" . $_FILES['uploadedfile']['error'];  
    }  
?>