<?php
include ('../db_fnc.php');
db_connect();
if(isset ($_POST['sub_mit'])){
$id = $_GET['id'];
$product = get_product($id);
move_uploaded_file($_FILES["filename"]["tmp_name"], "../userfiles/".$product['image']);  
$name = $_REQUEST['name'];
$price = $_REQUEST['price'];
$cat = $_REQUEST['cat'];
$subcat = $_REQUEST['subcat'];
$desc = $_REQUEST['desc'];
$query = mysql_query("UPDATE products SET title='$name' , price='$price' , description='$desc' , cat='$cat' , sub_category='$subcat' WHERE id=$id");
?>
<script>window.location.href='m_products.php';</script>
<?php
}
?>