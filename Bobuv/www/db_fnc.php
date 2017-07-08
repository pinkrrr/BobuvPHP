<?php

function db_connect()
{
$host = 'localhost';
$user = 'root';
$pswd = '';
$db = 'shop';

$connection = mysql_connect($host, $user, $pswd);
mysql_query("SET NAMES utf8");
if(!$connection || !mysql_select_db($db, $connection))
{
return false;
}
return $connection;
}

function db_result_to_array($result)
{
$res_array = array();
$count = 0;

while($row = mysql_fetch_array($result))
{
$res_array[$count] = $row;
$count++;
}
return $res_array;
}

function get_products()
{

db_connect();

$query = "SELECT * FROM products";

$result = mysql_query($query);

$result = db_result_to_array($result);

return $result;

}

function get_cat_products($cat)
{

db_connect();

$query = "SELECT * FROM products WHERE cat='$cat'";

$result = mysql_query($query);

$result = db_result_to_array($result);

return $result;

}

function get_sub_cat_products($sub_category)
{

db_connect();

$query = "SELECT * FROM products WHERE sub_category='$sub_category'";

$result = mysql_query($query);

$result = db_result_to_array($result);

return $result;

}

function get_cat()
{

db_connect();

$query = "SELECT * FROM categories";

$result = mysql_query($query);

$result = db_result_to_array($result);

return $result;

}


function get_subcat()
{

db_connect();

$query = "SELECT * FROM sub_category";

$result = mysql_query($query);

$result = db_result_to_array($result);

return $result;

}

function get_product($id)

{

db_connect();

$query = ("SELECT * FROM products WHERE id='$id'");

$result = mysql_query($query);

$row = mysql_fetch_array($result);

return $row;

}

?>