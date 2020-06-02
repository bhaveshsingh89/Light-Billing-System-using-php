
<?php
 session_start();
 
 $hostname = 'localhost';       
 $dbname   = 'lightbilling';
 $username = 'root';            
 $password = '';
 $loginuser = ($_POST['username']);
 $loginpass = md5(($_POST['password']));
 
 mysql_connect($hostname, $username, $password) or DIE('NOT Connected!');
 mysql_select_db($dbname) or DIE('Database name is not available!');

 $login = mysql_query("SELECT * FROM user WHERE (username = '$loginuser') and (password = '$loginpass')");
 $row=mysql_fetch_array($login);
 
 if($row){
 $_SESSION['id'] = $row['id'];
 $session=$_SESSION['id'];

 echo '<script>windows: location="billing.php"</script>';
 }
	else {
		header ("location: index.php?err");
		}
 
 
?>
