<?php
require "../inc/config.php";

//联系我们
$strSQL = "select * from pageset where id_pageset='1' " ;
$objDB->Execute($strSQL);
$contactus=$objDB->fields();

//map
$strSQL = "select * from siteset where id_siteset='1' " ;
$objDB->Execute($strSQL);
$contactmap=$objDB->fields();

//联系我们－大图
$strSQL = "select opicname from layoutpic where id_layout='4' limit 1" ;
$objDB->Execute($strSQL);
$contactus_banner=$objDB->fields();



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
<img  src="/upload/layout/<?=$contactus_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="service_left">
  <img src="../inc/pics/aboutleft02.jpg" width="232" height="357"  />
</div>
<!--end aboutc_left!-->

<div id="service_right">

<div id="service_right_title">联系我们</div>
<div id="contact_right"><?=$contactus[content];?></div>
<div id="contact_map"><?=$contactmap[mapcode];?></div>

</div><!--end service_right!-->

</div><!--end maincontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
