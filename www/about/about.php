<?php
require "../inc/config.php";

//企业与品牌－大图
$strSQL = "select opicname from layoutpic where id_layout='1' limit 1" ;
$objDB->Execute($strSQL);
$about_banner=$objDB->fields();

//企业与品牌
if(!isset($_GET[pageid])){
$_GET[pageid]=2;
}
$strSQL = "select * from pageset where id_pageset='".$_GET[pageid]."' " ;
$objDB->Execute($strSQL);
$about_us=$objDB->fields();

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
<img  src="/upload/layout/<?=$about_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="aboutc_left">
<div id="brand_left_menu">
    <div id="aboutc_lefttitle">企业与品牌</div>
    <div id="brand_left2"><a href="about.php?pageid=9">走近葆萃莱</a></div>
    <div id="brand_left2"><a href="about.php?pageid=7">企业简介</a></div>
    <div id="brand_left2"><a href="about.php?pageid=8">品牌由来</a></div>
</div>
  <!--<img src="../inc/pics/aboutleft02.jpg" width="232" height="357" style="margin-top:3px;" />-->
</div><!--end aboutc_left!-->

<div id="aboutc_right_box"><?=$about_us[content];?></div>

<div style="clear:both;"></div> 
</div><!--end maincontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
