<?php
include ('../db_fnc.php');
db_connect();
if(isset ($_POST['sub_mit'])){
$id = $_GET['id'];
move_uploaded_file($_FILES["filename"]["tmp_name"], "../userfiles/".$_FILES["filename"]["name"]);
$image = $_FILES["filename"]["name"];    
$name = $_REQUEST['name'];
$price = $_REQUEST['price'];
$cat = $_REQUEST['cat'];
$subcat = $_REQUEST['subcat'];
$desc = $_REQUEST['desc'];
$query = mysql_query("INSERT INTO products (title,description,price,image,cat,sub_category) VALUES ('$name','$desc','$price','$image','$cat','$subcat')");
?>
<script>window.location.href='m_products.php';</script>
<?php
}
?>