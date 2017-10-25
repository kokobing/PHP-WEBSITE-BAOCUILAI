<?php
require "../inc/config.php";

if(!isset($_GET[pageid])){
$_GET[pageid]=6;
}
$strSQL = "select * from pageset where id_pageset='".$_GET[pageid]."' " ;
$objDB->Execute($strSQL);
$brand=$objDB->fields();


//品牌形象－大图
$strSQL = "select opicname from layoutpic where id_layout='3' limit 1" ;
$objDB->Execute($strSQL);
$brand_banner=$objDB->fields();

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


<div id="aboutadvbox">
<img  src="/upload/layout/<?=$brand_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="brand_left">
<div id="brand_left_menu">
    <div id="aboutc_lefttitle">品牌形象</div>
    <div id="brand_left2"><a href="brand.php?pageid=6">形象店展示</a></div>
    <div id="brand_left2"><a href="brand.php?pageid=5">产品辅料展示</a></div>
    <div id="brand_left2"><a href="brand.php?pageid=4">展会现场</a></div>
</div>
 <!-- <img src="../inc/pics/aboutleft02.jpg" width="232" height="357" /> !-->
</div><!--end aboutc_left!-->

<div id="service_right">
<div id="brand_right"><?=$brand[content];?></div>
</div><!--end service_right!-->

<div style="clear:both;"></div> 
</div><!--end aboutcontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
