<?php include '../db_fnc.php' ?>

<style>

.table_top
{
    text-align: left;
    font-family: Helvetica;
    border-color: white;
    font-size: 14px;
    width: 1454px;
    border-collapse: collapse;
    margin: 20px 0px 20px 0px;
}

</style>

<?php
if(!empty($_SESSION[$myusername])){
header("location:main_login.php");
}
?>
<title>Заказы</title>
<div align="center">

<table border="0" cellpadding="5" class="table_top" style="width: 600px;">
<tr>
<td style="text-align: left;"><a href="manage.php">На главную</a></td>
<td style="text-align: right;"><a href="m_products.php">Список товаров</a></td>
</tr>
</table>

</div>

<div align="center" style="width: 100%;">
<div style="width: 1200px;" align="center">

<?php

    mysql_connect("localhost", "root", "") or die (mysql_error ());
	// Выбрать БД
	mysql_select_db("shop") or die(mysql_error());

	// SQL-запрос
	$strSQL = "SELECT * FROM orders";

	// Выполнить запрос (набор данных $rs содержит результат)
	$rs = mysql_query($strSQL);
	$sss = db_result_to_array($rs);
	// Цикл по recordset $rs
	// Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
	$timeeq='0';
    foreach($sss as $row){
	   
       if($row['time']!=$timeeq){
?>
<span style="font-size: 30;">Заказ №<?php echo $row['id']?></span>

<table border="1" style="width: 600px; border-collapse: collapse; border-color: black;" cellpadding="2">

<tr>
<td style="background-color: #dddddd; width: 90px;">&nbsp;Имя:</td><td>&nbsp;<?php echo $row['name'];?></td>
</tr>

<tr>
<td style="background-color: #dddddd;">&nbsp;Фамилия:</td><td>&nbsp;<?php echo $row['sname'];?></td>
</tr>


<tr>
<td style="background-color: #dddddd;">&nbsp;Телефон:</td></td><td>&nbsp;<?php echo $row['phone'];?></td>
</tr>


<tr>
<td style="background-color: #dddddd;">&nbsp;Адрес:</td><td>&nbsp;<?php echo $row['address'];?></td>
</tr>


<tr>
<td style="background-color: #dddddd;">&nbsp;E-mail:</td><td>&nbsp;<?php echo $row['email'];?></td>
</tr>

<tr>
<td style="background-color: #dddddd;">&nbsp;Дата:</td></td><td>&nbsp;<?php echo $row['date'];?></td>
</tr>

</table>

<table  border="1" style="width: 600px; border-collapse: collapse; border-color: black; margin-top: 20px;" >

<tr style="background-color: #dddddd; text-align: center;">
<td style="width: 70%;">Наименование</td>
<td style="width: 20%;">Цена за шт.</td>
<td style="width: 10%;">Кол-во</td>
</tr>

</table>

<?php

$summa = 0;

}
?>

<table  border="1" style="width: 600px; border-collapse: collapse; border-color: black; margin-top: -1px;" >
<tr>
<td style="width: 70%;">&nbsp;<?php echo $row['product'];?></td>
<td style="width: 20%; text-align: center;">&nbsp;<?php echo $row['price'];?> грн</td>
<td style="width: 10%; text-align: center;">&nbsp;<?php echo $row['qty'];?> шт</td>
</tr>
</table>

<?php $summa+=$row['price']*$row['qty'];?>

<?php if(($row['time']!=$timeeq) && (timeeq!='0')){ ?>
<table style="margin-bottom: 100px; margin-top: 10px; font-size: 20;"><tr><td>Общая сумма заказа: <?php echo $summa; ?> грн.</td></tr></table>

<?php
}

$timeeq=$row['time'];
}
	// Закрыть соединение с БД
	mysql_close();
?>



</div>
</div>