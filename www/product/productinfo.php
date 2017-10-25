<?php
require "../inc/config.php";

//单个产品
$strSQL = "select * from productinfo where dele='1' and  id_prodinfo='".$_GET[pid]."' order by id_prodinfo desc" ;
$objDB->Execute($strSQL);
$oneprod=$objDB->fields();

$strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$_GET[pid]."' order by id_prodpic asc limit 2" ;
$objDB->Execute($strSQL);
$toppic=$objDB->getrows();

//产品页大图
$strSQL = "select opicname as pic from layoutpic where id_layout='6' limit 9" ;
$objDB->Execute($strSQL);
$p_banner=$objDB->getrows();
if(isset($_GET[pic])){$picnum=$_GET[pic];}else{$picnum=0;}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../inc/js/stmenu.js"></script>
<script src="../inc/js/jquery.js" type="text/javascript"></script>
</head>
<body>

<? require "../header.php"; ?>

<!--
<div id="aboutadvbox">
<img  src="/upload/layout/<?=$p_banner[$picnum][pic];?>" />
</div><!--end aboutadvbox!-->


<div id="pcontentbox">
<div id="pc_left">
<? require "left.php"; ?>
</div><!--end pc_left!-->

<div id="pc_rightinfo">

<div id="pc_rightmenu">
<div id="pc_rightmenu1"><a href="product.php?pic=5&pname=<?=urlencode('维他命');?>">维他命&矿物质</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=6&pname=<?=urlencode('植物');?>">天然草本&植物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=7&pname=<?=urlencode('动物');?>">海洋生物&动物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=8&pname=<?=urlencode('其他');?>">其他萃取营养素</a></div>

</div><!--end pc_rightmenu!-->

<div id="pc_rightinfoc">
<div style="width:813px;height:830px; background-image:url(../upload/product/<?=$toppic[1][pic]?>);">
<?=$oneprod[content];?>
</div>
</div><!--end pc_rightplist!-->

</div><!--end pc_right!-->

</div><!--end pcontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
