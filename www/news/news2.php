<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";


//新闻动态
if(!isset($_GET[ndir2]) || $_GET[ndir2]==''){

  $arrParam[0][name]="faid";
  $arrParam[0][value]=$_GET[faid];
  
  $arrParam[1][name]="ndir2";
  $arrParam[1][value]=$_GET[ndir2];

$intRows = 5;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.fatherid='".$_GET[faid]."'";
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.*,b.fatherid from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.fatherid='".$_GET[faid]."' order by a.id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrnews=$objDB->GetRows();

}elseif(isset($_GET[ndir2])){

  $arrParam[0][name]="faid";
  $arrParam[0][value]=$_GET[faid];
  
  $arrParam[1][name]="ndir2";
  $arrParam[1][value]=$_GET[ndir2];

$intRows = 5;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo  where id_newsdir='".$_GET[ndir2]."' and dele=1";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select * from newsinfo  where id_newsdir='".$_GET[ndir2]."' and dele=1 order by id_newsinfo desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrnews=$objDB->GetRows();
}

//－大图
$strSQL = "select opicname from layoutpic where id_layout='7' limit 1" ;
$objDB->Execute($strSQL);
$news_banner=$objDB->fields();

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

<div id="allnews">
  <ul>
  <?php for($i=0;$i<sizeof($arrnews);$i++){?>
    <li><span><?=$arrnews[$i][newsdate];?></span><a href="newsinfo.php?newsid=<?=$arrnews[$i][id_newsinfo];?>&faid=<?=$_GET[faid];?>&ndir2=<?php echo $arrnews[$i][id_newsdir];?>" class="link_navi"><?=cutstr($arrnews[$i][title],100,1);?></a></li>
  <?php }?>
  </ul>
</div><!--end allnews!-->
<div id="allnewsnavi"><?php echo $strNavigate;?></div>


</div>

</div>
</div><!--end service_right!-->

<div style="clear:both;"></div> 
</div><!--end aboutcontentbox!-->



<? require "../footer.php"; ?>


</body>
</html>
