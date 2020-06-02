<?php session_start();
if(!isset($_SESSION['id']))
{
	echo '<script>windows: location="index.php"</script>';
}		
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysql_query("SELECT * FROM owners where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<title>Billing System</title>
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
	<div class="container">
		<div id="wrapper">
			<h1><center><b>Electricity Billing System</b></center></h1>
			<div style="color:#F00; font-size:12px; margin-left:900px;"> 
				<span><?php echo $sessionname;?></span><a href="logout.php"><span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
			</div>
			<ul class="nav nav-pills">
				<li class="btn btn-default btn-xs"><a href="clientbilling.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
				<li><a href='<?php echo 'viewbillclient.php?id=".$row['id']."'?>'><span class="glyphicon glyphicon-usd"></span>&nbsp;View Bills</a></li>

		</div>
	</div>
</body>
