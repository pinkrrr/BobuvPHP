<?php
    include ('../db_fnc.php');
    $str = get_cat();
    $strs = get_subcat();
    $prod = get_products();
	db_connect();
    
$counter = 1;
foreach ($str as $itemc){  
    foreach ($strs as $items){
    
    if($itemc['cat_id']==$items['sub_cat_id']){
        $a2 = ($items ['sub_id'].",");
        $a1 = $a1.$a2;
        }
    
       }
       if($counter!=count($str))
       $a1 = $a1.".";
       else{$a1 = $a1.".";}
       $counter++;
}
?>

<script type="text/javascript">

var counter = 0;

var gg="<?php echo ($a1); ?>";
var asubcatValues = gg.split(".");

// ф-ция, возвращающая массив домов по заданной улице
function getsubcatValuesBycat(index){
    var ssubcatValues = asubcatValues[index-1];
    return ssubcatValues.split(","); // преобразуем строку в массив домов
}

// главная ф-ция, выводящая динамически список домов
function MksubcatValues(index){
    var aCurrsubcatValues = getsubcatValuesBycat(index);
    var nCurrsubcatValuesCnt = aCurrsubcatValues.length;
    var osubcatList = document.forms["sel"].elements["subcat"];
    var osubcatListOptionsCnt = osubcatList.options.length;
    osubcatList.length = 0; // удаляем все элементы из списка домов
    for (i = 0; i < nCurrsubcatValuesCnt; i++){
        // далее мы добавляем необходимые дома в список
        if (document.createElement){
            var newsubcatListOption = document.createElement("OPTION");
            newsubcatListOption.text = aCurrsubcatValues[i];
            newsubcatListOption.value = aCurrsubcatValues[i];
            // тут мы используем для добавления элемента либо метод IE, либо DOM, которые, alas, не совпадают по параметрам…
            (osubcatList.options.add) ? osubcatList.options.add(newsubcatListOption) : osubcatList.add(newsubcatListOption, null);
        }else{
            // для NN3.x-4.x
            osubcatList.options[i] = new Option(aCurrsubcatValues[i], aCurrsubcatValues[i], false, false);
        }
    }
}

// инициируем изменение элементов в списке домов, в зависимости от текущей улицы
MksubcatValues(document.forms["sel"].elements["cat"].selectedIndex);
</script>


<?php
	$id = $_GET['id'];
	$product = get_product($id);
?>

<div align="center">
<form name="sel" method="post" action="save_edit.php?id=<?php echo $id ?>" enctype="multipart/form-data">
<table width="700px" cellpadding="10px" border="1" style="font-size: 14px; margin-top: 20px; border-collapse: collapse;">
<tr>
<td>
Название:
</td>

<td style="text-align: right;">
<input required="true"  name="name" size="40" type="text" value="<?php echo $product['title'];?>"/>
</td>
</tr>

<tr>
<td>
Цена:
</td>

<td style="text-align: right;">
<input required="true" name="price" size="40" type="text" value="<?php echo $product['price'];?>"/>
</td>
</tr>


<tr>
<td>
Категория:
</td>

<td style="text-align: right;">
<div align="left" style="float: left; margin-left: 320px;"><?php echo $product['cat'] ?></div>
<select name="cat" onChange="MksubcatValues(this.selectedIndex)">
<option selected value="<?php echo $item['cat'] ?>"><?php echo $item['cat'] ?></option>
<?php foreach ($str as $itemc) if($item['cat']!=$itemc['cat_id']) { ?>
<option value="<?php echo $itemc['cat_id'] ?>"><?php echo $itemc['cat_id'] ?></option>
<?php } ?>
</select>
</td>
</tr>

<tr>
<td>
Подкатегория:
</td>

<td style="text-align: right;">
<div align="left" style="float: left; margin-left: 320px;"><?php echo $product['sub_category'] ?></div>
<select name="subcat">
</select>
</td>
</tr>
<tr>
<td>
Описание:
</td>

<td style="text-align: right;">
<textarea required="true" name="desc" style="resize: none;" rows="18" cols="60"><?php echo $product['description'];?></textarea>
</td>
</tr>

<tr>



<td>
Изображение:
</td>


<td style="text-align: right;">
<img width="400px" src="../userfiles/<?php echo $product['image']?>"/><br />
<hr />
<input type="file" name="filename"/>
</td>
</tr>
<tr align="right"><td colspan="2"><input type="submit" name="sub_mit" value="Сохранить изменения" /></td></tr>
</table>



</form>


</div>
</div>
