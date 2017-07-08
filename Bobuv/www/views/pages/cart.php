<?
//$_SESSION['total_items'] = '0';
if($_SESSION['total_items'] != '0')
{
?>


<form action="index.php?view=update_cart" method="post" id="cart-form">

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
			<td align="center"><?php echo $product ['price'];?> ₴</td>
            <td align = "center"><input type="text" size="2" name="<?echo $id;?>" value="<?php echo $qty;?>"/></td>
			<td align="center"><?php echo $product ['price'] * $qty;?> ₴</td>
            <td align="center"><a href="index.php?view=cleanid&id=<?php echo $id?>"><img src="images/delete.png"/></a></td>
		</tr>
        <?php 
		endforeach;   
        ?>

</table>
	<p align="center" class="summa_zakaza">Общая сумма заказа: <span style="color: #ff8181; font-family: Helvetica; font-weight: normal;"><?php echo $_SESSION['total_price'];?> ₴</span></p>
   
  <br /><br />
  <div align="center" class="cart_link">
    <input class="btn" type="submit" name="update" value="Обновить"/> &nbsp;&nbsp;&nbsp;
    
    <a href="index.php?view=order">Оформить заказ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="index.php?view=clean">Очистить</a> </div>
    
    </p>
    
    
</form>   

<?php
}
else {?>
    
<div class="summa_zakaza" align="center" style="margin-top: -20px;">
Ваша корзина пуста!<br /><br />
<img style="border: solid; border-color: black; border-width: 2px; padding: 10px;" src="http://lol.tgcsitechecker.com/wp-content/uploads/22141413321328092249.jpeg" />
</div>

<?php 
}
?>