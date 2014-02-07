<?php
 	include "utilities.php";

 	$id = $_GET['id'];
 	$approved = get_approved($id);

 	if($approved['is_approved'] == 'N'){
 		approve_message($id);
 		 header("location:list_of_messages.php");
 	}else{
 		reject_message($id);
 		header("location:list_of_messages.php");
 	}
?>