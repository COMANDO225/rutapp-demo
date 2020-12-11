<?php 
require_once('../class/Book.php');
if(isset($_POST['tracker'])){
	$tracker = $_POST['tracker'];
	// echo $tracker;

	$result = $book->deleteBook($tracker);
	$return['valid'] = true;
	$return['msg'] = "¡Reserva eliminada correctamente bb!";
	echo json_encode($return);
}//isset
	
$book->Disconnect();