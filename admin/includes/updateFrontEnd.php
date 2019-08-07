<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$data = $_POST['home_editor'];
		$filename = "../".$_POST['filename'];
		@chmod($filename, 777);
		@file_put_contents($filename, $data);
		@chmod($filename, 775);
		exit(header("Location: ../homeEditor.php?msg=yes"));
	}
?>