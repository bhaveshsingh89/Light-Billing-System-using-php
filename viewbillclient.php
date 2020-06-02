<?php
include 'db.php';
$id =$_REQUEST['id'];
$resultclient = mysql_query("SELECT * FROM owners where id= '$id'");
while($row = mysql_fetch_array($resultclient))
{
  $fname=$row['fname'];
  $lname=$row['lname'];
  $id=$row['id'];
  $mi=$row['mi'];
  $contactno=$row['contact'];
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.min.css" />
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
<title><?php echo "$fname $lname     "?> - View Bills</title>
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

<?php
$result = mysql_query("SELECT * FROM bill where owners_id='$id'");

echo "<table class=\"table table-striped table-hover table-bordered\">
<tr>
<th>Id</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consuption</th>
<th>Price</th>
<th>Date</th>
<th>Bill Amount</th>
<th>Action</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $prev . "</td>";
  echo "<td>" . $pres . "</td>";
  echo "<td>". $totalcons."</td>";
  echo "<td>" . $price . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $bill . "</td>";
 echo "<td><center><a rel='facebox' target='_blank' href='viewpayment.php?id=".$row['id']."'><span class=\"glyphicon glyphicon-eye-open\">View </a></center></td>";
  echo "</tr>";
  }
echo "</table>";

?>
</div>
</div>
</body>
</html>
