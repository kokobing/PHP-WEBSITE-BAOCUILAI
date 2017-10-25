<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";
//公司产品
if(!isset($_GET[pdir2]) && !isset($_GET[pname])){

if (!isset($arrParam[0][value])){
  $arrParam[0][name]="pic";
  $arrParam[0][value]=0;
}else{
  $arrParam[0][name]="pic";
  $arrParam[0][value]=$_GET[pic];
}

  $arrParam[1][name]="pname";
  $arrParam[1][value]=$_GET[pname];

$intRows = 8;
$strSQLNum = "SELECT COUNT(*) as num from productinfo as a 
		  left join productdir as c on a.id_proddir=c.id_proddir
		  where a.dele='1' ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.title,a.intro,a.id_prodinfo,a.id_proddir from productinfo as a 
		  left join productdir as c on a.id_proddir=c.id_proddir
		  where a.dele='1'  order by a.id_prodinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrprods=$objDB->GetRows();

}elseif(isset($_GET[pdir2])){

if (!isset($arrParam[0][value])){
  $arrParam[0][name]="pic";
  $arrParam[0][value]=0;
}else{
  $arrParam[0][name]="pic";
  $arrParam[0][value]=$_GET[pic];
}

  $arrParam[1][name]="pname";
  $arrParam[1][value]=$_GET[pname];

$intRows = 8;
$strSQLNum = "SELECT COUNT(*) as num from productinfo as a 
		   left join productdir as c on a.id_proddir=c.id_proddir
		   where c.id_proddir='".$_GET[pdir2]."' and a.dele=1 ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.title,a.intro,a.id_prodinfo,a.id_proddir from productinfo as a 
		   left join productdir as c on a.id_proddir=c.id_proddir
		   where c.id_proddir='".$_GET[pdir2]."' and a.dele=1  order by a.id_prodinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrprods=$objDB->GetRows();

}elseif(isset($_GET[pname])){

if (!isset($arrParam[0][value])){
  $arrParam[0][name]="pic";
  $arrParam[0][value]=0;
}else{
  $arrParam[0][name]="pic";
  $arrParam[0][value]=$_GET[pic];
}

  $arrParam[1][name]="pname";
  $arrParam[1][value]=$_GET[pname];

$intRows = 8;
$strSQLNum = "SELECT COUNT(*) as num from productinfo as a 
		   left join productdir as c on a.id_proddir=c.id_proddir
		   where a.tag like '%".$_GET[pname]."%' and a.dele=1 ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.title,a.intro,a.tag,a.id_prodinfo,a.id_proddir from productinfo as a 
		   left join productdir as c on a.id_proddir=c.id_proddir
		   where a.tag like '%".$_GET[pname]."%' and a.dele=1  order by a.id_prodinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrprods=$objDB->GetRows();

}

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


<div id="aboutadvbox">
<img  src="/upload/layout/<?=$p_banner[$picnum][pic];?>" />
</div><!--end aboutadvbox!-->

<div id="pcontentbox">
<div id="pc_left">
<? require "left.php"; ?>
</div><!--end pc_left!-->

<div id="pc_right">

<div id="pc_rightmenu">
<div id="pc_rightmenu1"><a href="product.php?pic=5&pname=<?=urlencode('维他命');?>">维他命&矿物质</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=6&pname=<?=urlencode('植物');?>">天然草本&植物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=7&pname=<?=urlencode('动物');?>">海洋生物&动物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=8&pname=<?=urlencode('其他');?>">其他萃取营养素</a></div>

</div><!--end pc_rightmenu!-->

<div id="pc_rightplist">


<? for($i=0;$i<sizeof($arrprods);$i++){
    $strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$arrprods[$i][id_prodinfo]."' order by id_prodpic asc limit 1" ;
    $objDB->Execute($strSQL);
    $arronepic=$objDB->fields();
	?>
<div id="pc_rightplistbox">
<img src="../upload/product/<?=$arronepic[pic]?>" width="134" height="174" />
<h1><?=$arrprods[$i][title]?></h1>
<p><?=cutstr($arrprods[$i][intro],115,1)?></p>
<div id="pc_rightplistboxmore"><a href="productinfo.php?pid=<?=$arrprods[$i][id_prodinfo]?>" target="_blank"><img src="../inc/pics/pmore.gif" width="69" height="20" border="0" /></a></div>
</div><!--end pc_rightplistbox!-->
<? }?>


</div><!--end pc_rightplist!-->

<div id="pc_rightplistnavi"><?php echo $strNavigate;?></div><!--end pc_rightplistnavi!-->


</div><!--end pc_right!-->

</div><!--end pcontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
