<?php
 ini_set('display_errors', 'on');
include('config.php');
include('libs/functions.php');
if (isset($_GET['name'])){
	delfiles();
	}
upload();
printfile();


include('templates/index.php');

?>
