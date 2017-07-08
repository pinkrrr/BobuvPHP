<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="shop"; // Database name
$tbl_name="member"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
header("location:manage.php");
}
else {?>

<div align="center" style="margin-top: 5%;">
<p style="font-size: 40; font-family: Helvetica;"></a> Логин или пароль были введены неверно!</p>
<img width="600px" src="../images/alert.png"/>
</div>

<script type="text/javascript">
var i = 3;//время в сек.
function time(){
i--;//уменьшение счетчика
if (i < 0) location.href = "main_login.php";//редирект
}
time();
setInterval(time, 1000);
</script>
<?php
}
?>