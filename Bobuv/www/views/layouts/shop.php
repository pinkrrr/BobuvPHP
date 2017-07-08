<html>
<head>
<link href="popup_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="custom.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script src="views/js/jquery-1.11.0.min.js"></script>
<script src="views/js/lightbox.min.js"></script>
<script src="views/js/jquery-1.8.2.min.js"></script>
<script src="views/js/zoomsl-3.0.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="views/js/jquery.flexslider.js"></script>
<script src="views/js/zoomsl-3.0.min.js"></script>
<link rel="shortcut icon" href="/views/favicon.ico" type="image/x-icon" />
<link href="views/lightbox.css" rel="stylesheet" />
<link href="views/style.css" rel="stylesheet" type="text/css" />
<link href="views/menustyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="views/flexslider.css" type="text/css" media="screen" />
	
<script>
jQuery(function(){

    // если отсутсвует zoomsl-3.0.min.js
	if(!$.fn.imagezoomsl){
	
		$('.msg').show();
		return;
	}
     else $('.msg').hide();

	 
	// инициализация плагина
	$('.my-foto').imagezoomsl({ 

		zoomrange: [3, 3]	
	});  
});
</script>


<title>Интернет-магазин обуви "B'obuv"</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<div align="center">

<div class="maindiv" align="left">

<?
include 'views/header.html';
?>

<?
include 'views/hormenu.php';
?>

<div class="space"></div>

<?
include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php');
?>

<?
include 'views/footer.php';
?>

</div>
</div>
</body>
</html>

