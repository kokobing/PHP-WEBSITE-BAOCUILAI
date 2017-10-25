<?php
require "../inc/config.php";

//招商加盟
$strSQL = "select * from pageset where id_pageset='3' " ;
$objDB->Execute($strSQL);
$joinus=$objDB->fields();

//招商加盟－大图
$strSQL = "select opicname from layoutpic where id_layout='2' limit 1" ;
$objDB->Execute($strSQL);
$joinus_banner=$objDB->fields();

//招商加盟－左侧
$strSQL = "select opicname from layoutpic where id_layout='14' limit 1" ;
$objDB->Execute($strSQL);
$joinus_left=$objDB->fields();

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
<img  src="/upload/layout/<?=$joinus_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="joinus_left">
  <img src="/upload/layout/<?=$joinus_left[opicname];?>" width="232" height="190" /><br>
  <!--<img src="../inc/pics/aboutleft02.jpg" width="232" height="357" style="margin-top:3px;" />-->
</div>
<!--end aboutc_left!-->

<div id="service_right">

<div id="service_right_title">招商加盟</div>
<div id="contact_right"><?=$joinus[content];?></div>

</div><!--end service_right!-->
<div style="clear:both;"></div> 
</div><!--end maincontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
