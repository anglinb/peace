<?php 
if(isset($_POST['math']) && isset($_GET['answer']) && $_GET['answer'] == $_POST['math']) {
	if(isset($_POST['first_name'])) {
		$all_name = $_POST['first_name'] . " " . $_POST['last_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$message .= "\n \n from " . $all_name;
		$message .= "\n \n at " . $email;
		$message = wordwrap($message, 70);
		$subject = $_POST['subject'];
		$where_to = "kdruker@yahoo.com";
		mail($where_to, $subject , $message);
		header("Location: contact.php?sucess=1");
		exit;
	}else {
		header('Location: peaceconferencing.org');
		exit;
	}
}else {
	header('Location: contact.php?sucess=0');
	exit;
}	
?>