<?php
	
	$json = file_get_contents('http://localhost/bottele/function.php');
	$data = json_decode($json,true);
	
	if ($data!=NULL){

		$date= $data['0']['date'];
		$time= $data['0']['time'];
		$message= $data['0']['message'];
		
		// print_r($data);
	
		$token = "1472723524:AAHMG-35d7jVHUkVI4YDRCjeqbHflYI7b94";
		$path = "https://api.telegram.org/bot".$token;
		$msg = "Time : ".$time." Message :".$message;
		$chat_id = "802100286"; // notif project

		$url = $path."/sendmessage?disable_web_page_preview=1&chat_id=".$chat_id."&text=".$msg;
		file_get_contents($url);
		
	} else {
		echo "There Is No Message Assigned at This Time!";
	}
?>
