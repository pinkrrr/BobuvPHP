<div class="product_name"><?php echo $product['title']?></div>


<div class="tovar">

<img class="my-foto" src="/userfiles/<?php echo $product['image']?>">
</div>

<div style="margin-top: -15px;">
<div align="left" class="price"><?php echo $product['price']." ₴"?></div>

<div align="left"><a href="index.php?view=add_to_cart&id=<?php echo $product['id']?>"><img onmouseover="this.src='/images/buy_button_p.png';" onmouseout="this.src='/images/buy_button_np.png';" alt="image001" src="/images/buy_button_np.png"  /></a></div>
<br />
<div align="left" style="font-family: Helvetica; width: 90%;">
<h3>Описание товара:</h3>
<?php echo $product['description']?>
</div>
</div>