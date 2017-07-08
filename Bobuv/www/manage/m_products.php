<?php
session_start();
if(!empty($_SESSION[$myusername])){
header("location:main_login.php");
}
?>
<html>
<head>
<title>Администратор</title>
<link rel="stylesheet" type="text/css" href="popup_style.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="custom.js"></script>

</head>
<body>
<?php
    include ('../db_fnc.php');
	$str = get_cat();
    $strs = get_subcat();
    $prod = get_products();
?>
<div align="center">

<table border="0" cellpadding="5" class="table_top" style="width: 1198px;">
<tr>

<td><a href="manage.php">На главную</a></td>

<td style="text-align: right;">
<div id="trigger" style="margin-top: 10px;">
<a href="#" rel="popuprel" class="popup"><img align="right" height="80px" src="../images/add_product.png"/></a>
<a href="m_orders.php"><img align="right" height="80px" src="../images/spisok_zakazov_small.png"/></a>
</div>

<div class="popupbox" id="popuprel">
<div id="intabdiv">
<?php include('popup_window.php'); ?>           
</div>
</div>


</tr>
</table>

</div>

<div align="center">

<style>

.table_top
{
    text-align: left;
    font-family: Helvetica;
    border-color: white;
    font-size: 14px;
    border-collapse: collapse;
}

.table_title
{
    border-collapse: collapse;
    text-align:center;
    color: white;
    font-family: Helvetica;
    border-color: black;
    background: #9b9b9b;
}

.table_products
{
    border-collapse: collapse;
    text-align:center;
    font-family: Helvetica;
    border-color: black;
    border-collapse: collapse;
    text-align: center;
    margin-top: -1px;
    hyphens: auto;
}

td
{
    border-color: black;
}

input[type='file'] {
  color: transparent;
  width: 75px;
}

</style>

<table border="1" cellpadding="5" class="table_title">
<tr>

<td style="width: 30px;">id</td>

<td style="width: 200px;">Фото</td>

<td style="width: 150px;">Название</td>

<td style="width: 80px;">Цена</td>

<td style="width: 200px;">Описание</td>

<td style="width: 150px;">Категория</td>

<td style="width: 150px;">Подкатегория</td>

<td style="width: 150px;">Редактирование</td>


</tr>

</table>

<?php
	foreach($prod as $item) { 
?>

<table border="1" cellpadding="5" class="table_products">
<tr>

<td style="width: 30px;"><?php echo $item['id'];?></td>
     
<td style="width: 200px; height: 150px;"><img width="100%" src="../userfiles/<?php echo $item['image']?>"/></td>

<td style="width: 150px;"><?php echo $item['title'];?></td>

<td style="width: 80px;"><?php echo $item['price'];?></td>

<td style="width: 200px; font-size: 12; text-align: left;"><?php echo $item['description'];?></td>

<td style="width: 150px;">


<?php echo $item['cat'] ?>

</td>

<td style="width: 150px;">

<?php echo $item['sub_category'] ?>

</td>

<td style="width: 150px;">


<div id="trigger">
<a href="edit_product.php?id=<?php echo $item['id']?>">Изменить</a>
</div><br />

<a href="../index.php?view=delete_product&id=<?php echo $item['id']?>">Удалить</a>


</tr>

</table>

<?php
}
?>

</div>
<div id="fade"></div>
</body>
</html>
