<?php
include 'db.php';
	$id =$_REQUEST['id'];

	mysql_query("DELETE from bill WHERE id='$id'");
			

		 echo "<script>windows: location='bill.php'</script>";				
?>			