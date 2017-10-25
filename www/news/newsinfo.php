<?php
require "../inc/config.php";
require "../inc/function.class.php";

//新闻内容
$strSQL = "select * from newsinfo where id_newsinfo='".$_GET[newsid]."'  " ;
$objDB->Execute($strSQL);
$onenews=$objDB->fields();

//－大图
if(isset($_GET[faid]) && $_GET[faid]==18){//健康资讯
$strSQL = "select opicname from layoutpic where id_layout='7' limit 1" ;
$objDB->Execute($strSQL);
$news_banner=$objDB->fields();
}

if(isset($_GET[faid]) && $_GET[faid]==1){//企业动态
$strSQL = "select opicname from layoutpic where id_layout='8' limit 1" ;
$objDB->Execute($strSQL);
$news_banner=$objDB->fields();
}

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
<img  src="/upload/layout/<?=$news_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="service_left">
<?php require "left.php";?>
</div><!--end aboutc_left!-->

<div id="service_right">
<div id="service_right_title"><?php if($_GET[faid]=='1'){echo '企业动态';}elseif($_GET[faid]=='18'){echo '健康资讯';}?></div>
<div id="brand_right">

<div class="txt" id="newscontentright_content">

<div id="onenewstitle">
<ul>
<li class="txt_newstitle"><?=$onenews[title];?></li>
<li><?=$onenews[newsdate];?></li>
</ul>
</div><!--end onenewstitle!-->
<div id="onenewscontent"><?=$onenews[content];?></div><!--end onenewscontent!-->


</div>

</div>
</div><!--end service_right!-->

<div style="clear:both;"></div> 
</div><!--end aboutcontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
