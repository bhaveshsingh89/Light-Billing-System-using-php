<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

<?php
 session_start();
 
 $hostname = 'localhost';       
 $dbname   = 'lightbilling';
 $username = 'root';            
 $password = '';       
 $myurl = '';

 mysql_connect($hostname, $username, $password) or DIE('NOT Connected!');
 mysql_select_db($dbname) or DIE('Database name is not available!');
 $login = mysql_query("SELECT * FROM owners WHERE (mi = '" .($_POST['username']) . "') and (contact = '" .($_POST['password']) . "')");
 $row=mysql_fetch_array($login);
 
 if($row){
 $_SESSION['id'] = $row['id'];
 $_SESSION['name'] = $row['fname'];
 $session=$_SESSION['id'];
 
 echo '<script>windows: location="clientbilling.php"</script>';
 //'<script>window.location.href = "viewbill.php?id=";</script>';
 }
	else {
		header ("location: index.php?err");
		}
 
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Adani Electricity Home</title>
<style type="text/css">
#wrapper{
 width:100%;
 margin:0 auto;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:2%;
 padding:10px;
 height:550px;
}
</style>
</head>
<body>
<div id="wrapper">
	<h1><center><b>Adani Electricity Home</b></center></h1>
	<a href="logout.php">   <span class="btn btn-danger glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
	<?php
	echo "<a rel='facebox' href='viewbillclient.php?id=".$row['id']."'><span class=\"btn btn-danger  btn-xs glyphicon glyphicon-eye-open\">View</span></a>";?>
</div>
</body>
</html>

