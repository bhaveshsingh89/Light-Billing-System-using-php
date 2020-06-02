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
	$fname=$row['fname'];
	$lname=$row['lname'];
	$id=$row['id'];
	$mi=$row['mi'];
	$contactno=$row['contact'];
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
<title><?php echo "$fname $lname     "?> - Home</title>
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
			<h1><center><b>Adani Electricity Billing</b></center></h1>
			<div style="color:#F00; font-size:20px; margin-left:900px;"> 
				<span><?php echo "$fname $lname     "?></span><a href="logout.php"><span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
			</div>
			<ul class="nav nav-pills">
				<li class="btn btn-default btn-xs"><a href="clientbilling.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
				<li class="btn btn-default btn-xs"><a href='<?php echo "viewbillclient.php?id=$id"; ?>'><span class="glyphicon glyphicon-usd"></span>&nbsp;View Bills</a></li>
			</ul>
			<hr color="#999999" />
<!-------- home panel ------------>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h4>Welcome, <?php echo $fname; ?></h4>
					<hr color="#000000" />
					<div class="col-md-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="panel-title">
									<h5 style="font-size:24px; font-weight:bold;">Your Details</h5>
								</div>
							</div>
							<div class="panel-body">
								<h4 align="left" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;">First Name : <?php echo $fname ?></h4>
								<h4 align="left" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;">Last Name : <?php echo $lname ?></h4>
								<h4 align="left" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;">Meter Number : <?php echo $mi ?></h4>
								<h4 align="left" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;">Mobile Number : <?php echo $contactno ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
