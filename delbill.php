<?php session_start(); ?>
<?php
 include 'db.php';
$id =$_REQUEST['id'];


$result = mysql_query("SELECT * FROM owners WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$name=$test['lname'] ;
			

?>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />

<h2>Are you sure you want to delete this record <?php echo $name; ?></h2>
<a href='delbillexec.php?id=<?php echo "$id"; ?>'><span class=\"btn btn-info btn-xs glyphicon glyphicon-usd\">Yes</span></a>
&nbsp;<a href='bill.php'>No</a>
