<?php
require "./inc/config.php";
require "./inc/function.class.php";

//企业动态
$strSQL = "select a.id_newsinfo,a.id_newsdir,a.title,a.intro from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where b.fatherid='1' and a.dele='1' order by a.id_newsinfo desc limit 7";
$objDB->Execute($strSQL);
$newsqydt=$objDB->GetRows();

//健康资讯
$strSQL = "select a.id_newsinfo,a.id_newsdir,a.title,a.intro from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where b.fatherid='18' and a.dele='1' order by a.id_newsinfo desc limit 7";
$objDB->Execute($strSQL);
$newsjkzx=$objDB->GetRows();

//首页-走近葆萃莱
$strSQL = "select opicname as pic,b.content  from  layoutpic as a 
           left join layout as b on a.id_layout=b.id_layout where a.id_layout='9' order by a.id_layoutpic asc limit 1" ;
$objDB->Execute($strSQL);
$about1=$objDB->fields();

//首页-明星产品
$strSQL = "select opicname as pic,a.intro   from  layoutpic as a 
           left join layout as b on a.id_layout=b.id_layout where a.id_layout='10' order by a.id_layoutpic asc limit 1" ;
$objDB->Execute($strSQL);
$about2=$objDB->fields();

//首页-新品
$strSQL = "select opicname as pic,b.content   from  layoutpic as a 
           left join layout as b on a.id_layout=b.id_layout where a.id_layout='11' order by a.id_layoutpic asc limit 1" ;
$objDB->Execute($strSQL);
$about3=$objDB->fields();

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
<div id="maincontent1" style=" background-image:url(/upload/layout/<?=$about1[pic];?>);"><p><br />
    <a href="/about/about.php?pageid=9"><img src="inc/pics/homectitle01.gif" width="85" height="23" border="0" /></a><br />
<br />
<?=$about1[content];?>
</p>
</div><!--end maincontent1!-->
<div id="maincontent2" style=" background-image:url(/upload/layout/<?=$about2[pic];?>);">
<p><br />
  <a href="starproducts.php"><img src="inc/pics/homectitle02.gif" width="85" height="23" border="0" /></a><br />
<?=$about2[intro];?>
</div><!--end maincontent2!-->
<div id="maincontent3" style=" background-image:url(/upload/layout/<?=$about3[pic];?>);">
<p><br />
  <a href="newproducts.php"><img src="inc/pics/homectitle03.gif" width="85" height="23" border="0" /></a><br />
<br />
<?=$about3[content];?>
</p>
</div><!--end maincontent3!-->
<div id="maincontent4">
<div style="float:right; margin-top:15px; margin-right:10px;"><a href="/news/news.php?faid=1" class="link_navi">more>></a></div>
<div id="maincontent4_top"><a href="/news/newsinfo.php?newsid=<?=$newsqydt[0][id_newsinfo]?>&faid=1&ndir2=<?php echo $newsqydt[0][id_newsdir];?>"><img src="/upload/news/<?php
//最新新闻的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$newsqydt[0][id_newsinfo]."' limit 1" ;
$objDB->Execute($strSQL);
$newsqydtpic=$objDB->fields();
echo $newsqydtpic[opicname];
?>" width="104" height="84" border="0" /></a>
<h1><a href="/news/newsinfo.php?newsid=<?=$newsqydt[0][id_newsinfo]?>&faid=1&ndir2=<?php echo $newsqydt[0][id_newsdir];?>" class="main_newstitle"><?=cutstr($newsqydt[0][title],42,1);?></a></h1>
<p><?=cutstr($newsqydt[0][intro],160,1);?></p></div>
<div id="maincontent4_end">
<?php for($i=1;$i<sizeof($newsqydt);$i++){?>
<div id="maincontent4_endnews"><a href="/news/newsinfo.php?newsid=<?=$newsqydt[$i][id_newsinfo]?>&faid=1&ndir2=<?php echo $newsqydt[$i][id_newsdir];?>"><?=cutstr($newsqydt[$i][title],30,1);?></a></div>
<?php }?>
</div>

</div><!--end maincontent4!-->
<div id="maincontent5">
<div style="float:right; margin-top:15px; margin-right:10px;"><a href="/news/news2.php?faid=18" class="link_navi">more>></a></div>
<div id="maincontent5_top"><a href="/news/newsinfo.php?newsid=<?=$newsjkzx[0][id_newsinfo]?>&faid=18&ndir2=<?php echo $newsjkzx[0][id_newsdir];?>"><img src="/upload/news/<?php
//最新新闻的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$newsjkzx[0][id_newsinfo]."' limit 1" ;
$objDB->Execute($strSQL);
$newsjkzxpic=$objDB->fields();
echo $newsjkzxpic[opicname];
?>" width="104" height="84" border="0" /></a>
<h1><a href="/news/newsinfo.php?newsid=<?=$newsjkzx[0][id_newsinfo]?>&faid=18&ndir2=<?php echo $newsjkzx[0][id_newsdir];?>" class="main_newstitle"><?=cutstr($newsjkzx[0][title],42,1);?></a></h1>
<p><?=cutstr($newsjkzx[0][intro],160,1);?></p></div>
<div id="maincontent5_end">
<?php for($i=1;$i<sizeof($newsjkzx);$i++){?>
<div id="maincontent5_endnews"><a href="/news/newsinfo.php?newsid=<?=$newsjkzx[$i][id_newsinfo]?>&faid=18&ndir2=<?php echo $newsjkzx[$i][id_newsdir];?>"><?=cutstr($newsjkzx[$i][title],30,1);?></a></div>
<?php }?>
</div>

</div><!--end maincontent5!-->

</div><!--end maincontentbox!-->



<? require "footer.php"; ?>


</body>
</html>
