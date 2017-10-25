<?
$c_filename = end(explode('/',$_SERVER["PHP_SELF"])); 
if($c_filename=='about.php'){$m_aboutbg="menu04.gif";$m_aboutcolor="#000";}else{$m_aboutbg="menu03.gif";$m_aboutcolor="#fff";}
if($c_filename=='product.php'){$m_productbg="menu04.gif";$m_productcolor="#000";}else{$m_productbg="menu03.gif";$m_productcolor="#fff";}
if($c_filename=='join.php'){$m_joinbg="menu04.gif";$m_joincolor="#000";}else{$m_joinbg="menu03.gif";$m_joincolor="#fff";}
if($c_filename=='brand.php'){$m_brandbg="menu04.gif";$m_brandcolor="#000";}else{$m_brandbg="menu03.gif";$m_brandcolor="#fff";}
if($c_filename=='contact.php'){$m_contactbg="menu04.gif";$m_contactcolor="#000";}else{$m_contactbg="menu03.gif";$m_contactcolor="#fff";}
if($c_filename=='service.php'){$m_servicebg="menu04.gif";$m_servicecolor="#000";}else{$m_servicebg="menu03.gif";$m_servicecolor="#fff";}
?>

<div id="headerbox">
<div id="headerlogo"><a href="/"><img src="/inc/pics/logo.png" border="0" /></a></div>
<div id="headeright">
<!--<div id="headeright_quickmenu"><a href="#">首页</a> | <a href="#">关于我们</a> | <a href="#">联系我们</a></div>-->
<div id="headeright_quicktel"><img src="/inc/pics/headertel.gif" style="float:left; margin-top:5px;" />&nbsp;&nbsp;电&nbsp;&nbsp;话：40088-86-021</div>
<div style="clear:both;"></div> 
<div id="headeright_quickmail"><a href="mailto:poetryland@163.com"><img src="/inc/pics/headermail.gif" border="0" /></a>&nbsp;&nbsp;E-mail：poetryland@163.com</div>

</div><!--end headeright!-->

<div id="headermenu">
<script type="text/javascript">
<!--
stm_bm(["menu0b0f",900,"","/inc/pics/blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","488",0,0,1,2,"hand","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,0,0,0,0,100,"",-2,"",-2,50,0,0,"#999999","#FFFFFF","",0,0,0,"#CCCCCC"]);
stm_ai("p0i0",[0,"葆萃莱首页","","",-1,-1,0,"/","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/menu01.gif","/inc/pics/menu02.gif",3,3,0,0,"#CCCCCC","#CCCCCC","#FFFFFF","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i1","p0i0",[0,"企业与品牌","","",-1,-1,0,"/about/about.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_aboutbg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_aboutcolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i2","p0i1",[0,"产品中心","","",-1,-1,0,"/product/product.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_productbg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_productcolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i3","p0i1",[0,"招商加盟","","",-1,-1,0,"/join/join.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_joinbg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_joincolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i4","p0i1",[0,"品牌形象","","",-1,-1,0,"/brand/brand.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_brandbg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_brandcolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i5","p0i1",[0,"联系我们","","",-1,-1,0,"/contact/contact.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_contactbg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_contactcolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i6","p0i1",[0,"客户服务","","",-1,-1,0,"/service/service.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/<?=$m_servicebg;?>","/inc/pics/menu04.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?=$m_servicecolor;?>","#000000","bold 13pt '隶书','Verdana'","bold 13pt 隶书",0,0,"","","","",0,0,0],147,37);
stm_aix("p0i7","p0i0",[0,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#000000",1,"#000000",1,"/inc/pics/menu05.gif","/inc/pics/menu05.gif"],64,37);
stm_ep();
stm_cf([0,0,0,"Main_frame","Navigation_frame",1]);
stm_em();
//-->
</script>

</div>

</div><!--end headerbox!-->