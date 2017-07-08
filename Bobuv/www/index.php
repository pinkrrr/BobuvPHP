<? setcookie (null);
include ('db_fnc.php');
include ('cart_fnc.php');
db_connect();

session_start();

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
$_SESSION['total_items'] = 0;
$_SESSION['total_price'] = '00.0';
}

$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch($view)
{ 
	case('index'):
	$products = get_products();
	break;
	
	case('cat'):
	$cat = $_GET['id'];
	$products = get_cat_products($cat);
	break;
	
	case('sub_cat'):
	$sub_category = $_GET['id'];
	$products = get_sub_cat_products($sub_category);
	break;	

	case('product'):
	$id = $_GET['id'];
	$product = get_product($id);
	break;
	
	case('add_to_cart'):
	$id = $_GET['id'];
	$add_item = add_to_cart($id);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php?view=product&id='.$id);
	break;
	
    case('add_to_cart_list'):
	$id = $_GET['id'];
	$add_item = add_to_cart($id);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php');
	break;
    
    case('add_to_cart_list_cat'):
	$id = $_GET['id'];
    $product = get_product($id);
	$add_item = add_to_cart($id);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php?view=cat&id='.$product['cat']);
	break;
    
    case('add_to_cart_list_sub_cat'):
	$id = $_GET['id'];
    $product = get_product($id);
	$add_item = add_to_cart($id);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php?view=sub_cat&id='.$product['sub_category']);
	break;
    
    case('update_cart'):
	update_cart();
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php?view=cart');
	break;  
    
    case('clean'):
    unset($_SESSION['cart']);
    header('Location: index.php?view=cart');
    break;
    
    case('cleanid'):
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
	$_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
	header('Location: index.php?view=cart');
    break;
    
    case('delete_product'):
    db_connect();
    $id = $_GET['id'];
    $query = mysql_query("DELETE FROM products WHERE id='$id'");
    header('Location: manage/m_products.php');
    break;
    
    case('order');
    break;
}

include($_SERVER['DOCUMENT_ROOT'].'/views/layouts/shop.php');

?>