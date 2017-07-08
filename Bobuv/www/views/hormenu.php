<div id="mainmenu">

<ul>

<? $categories = get_cat(); ?>
<? $sub_category = get_subcat(); ?>

<? foreach ($categories as $itemc){?>

<li>
<a href="index.php?view=cat&id=<?php echo $itemc ['cat_id'];?>"><?php echo $itemc ['name'];?></a>

 <ul>
 <? foreach ($sub_category as $items){?>
	<? if($itemc['cat_id']==$items['sub_cat_id']){?>
	
	<li><a href="index.php?view=sub_cat&id=<?php echo $items ['sub_id'];?>"><?php {echo $items['sub_name'];} ?></a></li>
	<?php } ?>

 <?}?>
 
 </ul>

</li>

<?}?>

<li><a href="index.php?view=dostavka_i_oplata">Доставка и оплата</a></li>

<li><a href="index.php?view=contacts">Контакты</a></li>

</ul>
</div>