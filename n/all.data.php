<?php
include"db.connect.php";

$sql = "SELECT id_list, name_list, custom_name FROM list";
$run = mysql_query($sql);
$row = mysql_num_rows($run);


$data = array(
		0 => array(
			'title' => 'Postingan 1',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'image' => array('main' => 'assets/img/63841032_p0.jpg'),
			'author' => 'Admin',
			),
		1 => array(
			'title' => 'Postingan 2',
			'description' => 'Just Lorem ipsum...',
			'image' => array('main' => ''),
			'author' => 'anandac16',
			),
		);
?>
