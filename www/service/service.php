<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";

//客户服务－大图
$strSQL = "select opicname from layoutpic where id_layout='5' limit 1" ;
$objDB->Execute($strSQL);
$service_banner=$objDB->fields();


$intRows = 4;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo where id_newsdir='26' and dele='1' ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select title,content from newsinfo where id_newsdir='26' and dele='1' order by id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrservice=$objDB->GetRows();

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
<img  src="/upload/layout/<?=$service_banner[opicname];?>" />
</div><!--end aboutadvbox!-->

<div id="aboutcontentbox">
<div id="service_left">
  <img src="../inc/pics/aboutleft02.jpg" width="232" height="357" />
</div>
<!--end aboutc_left!-->

<div id="service_right">
  <!--end service_right1!-->

<div id="service_right_title">客户服务</div><!--end service_right2!-->
<div id="service_right_qna">
<?php for($i=0;$i<sizeof($arrservice);$i++){?>
<div id="service_right_q"><?=$arrservice[$i][title];?></div>
<div id="service_right_a"><?=$arrservice[$i][content];?></div>
<?php }?>
<div id="allservicenavi"><?php echo $strNavigate;?></div>
</div><!--end service_right_qna!-->


<!--end service_right2!-->
</div>
<!--end service_right!-->

</div><!--end maincontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
