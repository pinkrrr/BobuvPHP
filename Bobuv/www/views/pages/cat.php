<?session_start();?>
<?php
if (is_array($products))
foreach ($products as $item):
?>

<div style="margin-top: -50;">
<table class="product_in_list" cellspacing="0" border="0" align="center" width="250">
<tr height="320">

<td align="middle" colspan="2" style="padding: 10;" class="shadow_image">
<a href="index.php?view=product&id=<?php echo $item['id']?>"><img width="100%" src="/userfiles/<?php echo $item['image']?>"/></a>
</td>

</tr>
<tr height="25px"></tr>
<tr height="50px">

<td valign="top" colspan="2">

<div align="left">

<a style="color: #916a8e; font-family: Century Gothic; font-size: 18px; color: black;" class="product_title_link" href="index.php?view=product&id=<?php echo $item['id']?>"><?php echo $item['title']?></a>

</div>
</td>

</tr>
<tr>
<td><div align="left" style="color: #ff8181; font-family: Helvetica; font-weight: bold; font-size: 28px;"><?php echo $item['price']?> ₴</div></td>

<td class="buy_button"><div align="center"><a style="color: black; text-decoration: none; text-size: 20; font-family: Century Gothic;" href="index.php?view=add_to_cart_list_cat&id=<?php echo $item['id']?>">В корзину</a></div></td>
</tr>

</table>
</div>
<?php
endforeach;
?>
