<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv.html");	
} else {
	echo file_get_contents("view/frontpage.html");
}

?>