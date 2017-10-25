<?php

//产品中心－左侧广告－上
$strSQL = "select content,title  from  layout  where id_layout='12' " ;
$objDB->Execute($strSQL);
$productadv1=$objDB->fields();


//产品中心－左侧广告－下
$strSQL = "select opicname as pic,b.content   from  layoutpic as a 
           left join layout as b on a.id_layout=b.id_layout where a.id_layout='13' order by a.id_layoutpic asc limit 1" ;
$objDB->Execute($strSQL);
$productadv2=$objDB->fields();

?>

<div id="pc_left3title1">产品分类</div>
<div id="pc_left2"><a href="product.php?pic=0&pname=<?=urlencode('男性');?>">男性生命力养护</a></div>
<div id="pc_left2"><a href="product.php?pic=1&pname=<?=urlencode('女性');?>">女性养颜美体</a></div>
<div id="pc_left2"><a href="product.php?pic=2&pname=<?=urlencode('母婴');?>">母婴、幼儿成长倍护</a></div>
<div id="pc_left2"><a href="product.php?pic=3&pname=<?=urlencode('中老年');?>">中老年健康维护</a></div>
<div id="pc_left2"><a href="product.php?pic=4&pname=<?=urlencode('全家');?>">全家健康护理</a></div>
<div id="pc_left3title"><?=$productadv1[title];?></div>
<div id="pc_left3content">
<?=$productadv1[content];?>
</div><!--end pc_left3content!-->

<div id="pc_left4" style=" background-image:url(/upload/layout/<?=$productadv2[pic];?>);">
<?=$productadv2[content];?>
</div><!--end pc_left4!-->
