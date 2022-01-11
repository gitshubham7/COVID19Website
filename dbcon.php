<?php

$server= 'localhost';
$user = 'root';
$password = '';
$db= 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		alert("We recommend you to download Aarogya setu app");
	</script>
	<?php
}else{
	?>
	<script>
		alert("No connection ");
	</script>
	<?php
}


?>