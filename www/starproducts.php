<?php
require "./inc/config.php";
require "./inc/function.class.php";





//首页-明星产品
$strSQL = "select a.title,a.intro,a.tag,a.id_prodinfo,a.id_proddir from productinfo as a 
		   left join productdir as c on a.id_proddir=c.id_proddir
		   where a.tag like '%明星%' and a.dele=1  order by a.id_prodinfo desc" ;
$objDB->Execute($strSQL);
$arrprods=$objDB->getrows();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="inc/css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="inc/js/stmenu.js"></script>
<script src="inc/js/jquery.js" type="text/javascript"></script>
<script src="inc/js/changepic.js"></script>
</head>
<body>

<? require "header.php"; ?>


<div id="mainadvbox">
<div id="mainadv">

<div><img  src="inc/pics/banner01.jpg" /></div> 

</div> 
</div>
</div><!--end mainadvbox!-->

<div id="maincontentbox">


<? for($i=0;$i<sizeof($arrprods);$i++){
    $strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$arrprods[$i][id_prodinfo]."' order by id_prodpic asc limit 1" ;
    $objDB->Execute($strSQL);
    $arronepic=$objDB->fields();
	?>
<div id="starprod" style="margin-left:20px;">

<div id="starprodimg"><img src="../upload/product/<?=$arronepic[pic]?>" width="134" height="174" /></div>
<h1><?=$arrprods[$i][title]?></h1>
<p><?=cutstr($arrprods[$i][intro],115,1)?></p>
<div id="starprodmore"><a href="/product/productinfo.php?pid=<?=$arrprods[$i][id_prodinfo]?>"><img src="../inc/pics/pmore.gif" width="69" height="20" border="0" /></a></div>
</div><!--end starprod!-->

<? }?>




</div><!--end maincontentbox!-->



<? require "footer.php"; ?>


</body>
</html>
