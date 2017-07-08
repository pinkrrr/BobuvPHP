<?
if($_SESSION['cart'] && !isset($_POST['order']))
{
?>


<form action="index.php?view=order" method="post" id="cart-form">

<table align="center" cellspacing="0" cellpadding="7" border="0" class="table_cart" width="600" style="text-align: center;">
	<tr style="background-color: #ff8181;">
		<td>Товар</td>
		<td>Цена</td>
		<td>Количество</td>
		<td>Всего</td>
        <td>Удалить</td>
	</tr>
	<?php 
		foreach ($_SESSION ['cart'] as $id => $qty):  
        $product = get_product($id); 
		?>
		<tr align="left" style="background-color: #ededed;">
			<td align="center"><?php echo $product['title'];?></td>
			<td align="center"><?php echo $product ['price'];?>₴</td>
            <td align="center"><?php echo $qty;?></td>
			<td align="center">₴<?php echo $product ['price'] * $qty;?></td>
            <td align="center"><a href="index.php?view=cleanid&id=<?php echo $id?>"><img src="images/delete.png"/></a></td>
		</tr>
        <?php 
		endforeach;   
        ?>

</table>
	<p align="center" class="summa_zakaza">Общая сумма заказа: <span style="color: #ff8181; font-family: Helvetica; font-weight: normal;"><?php echo $_SESSION['total_price'];?> ₴</span></p>
    
    <table align="center" border="0" cellspacing="10" cellpadding="0" width="400px">
    <tr>
    
    <td>
    Ваше имя: <br /><br />
    Ваше фамилия: <br /><br />
    Ваше адрес: <br /><br />
    Ваш телефон: <br /><br />
    Ваше e-mail: <br /><br />
    </td>
    
    <td style="text-align: right;">
    <input required="true" type="text" name="name" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="sname" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="address" size="30" maxlength="20"/><br /><br />
    <input required="true" type="text" name="phone" size="30" maxlength="20" value="+38"/><br /><br />
    <input type="text" name="email" size="30" maxlength="30"/><br /><br />
    </td>  
    </tr>
    </table>
    
    
    <p align="center"><input type="submit" name="order" value="Заказать"/></p>
    
</form>

<form action="index.php?view=clean_cart" method="post" id="cart-form">
    
<?php
}
if($_SESSION['cart'] && isset($_POST['order']))
{
foreach ($_SESSION ['cart'] as $id => $qty):
$product = get_product($id);

    $date = date('Y-m-d');
    $time = date('H:i:s');

$name = $_REQUEST['name'];
        $sname = $_REQUEST['sname'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];

        $query = mysql_query("INSERT INTO orders (name,sname,address,phone,email,date,time,product,prod_id,price,qty) VALUES ('$name','$sname','$address','$phone','$email','$date','$time','{$product['title']}','{$product['id']}','{$product['price']}','$qty')");
endforeach;       
        
        ?>
        
        <div class="summa_zakaza" align="center" style="margin-top: -20px;">
        Ваш заказ принят, <?php echo $name ?>!<br /><br />
        <img style="border: solid; border-color: black; border-width: 2px; padding: 10px;" src="http://thumbs.dreamstime.com/x/smiling-shoe-5746555.jpg" />
        </div>
        
        <?php
        
        unset($_SESSION['cart']);
}
?>
</form>