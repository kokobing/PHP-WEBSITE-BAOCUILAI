<?php
//新闻二级目录
$strSQL = "select id_newsdir,name from newsdir where fatherid='".$_GET[faid]."' and dele=1  " ;
$objDB->Execute($strSQL);
$newsdir2=$objDB->GetRows();

?>
<div id="newslefttitle"><?php if($_GET[faid]=='1'){echo '企业动态';}elseif($_GET[faid]=='18'){echo '健康资讯';}?></div><!--end content_aboutlefttitle!-->
<div id="newsleftmenu">
<ul>
<li><a href="/news/news<?php if($_GET[faid]=='18'){echo '2';}?>.php?faid=<?=$_GET[faid]?>" class="link_aboutnavi"><?php if($_GET[faid]=='1'){echo '所有企业动态';}elseif($_GET[faid]=='18'){echo '所有健康咨询';}?></a></li>
<?php for($i=0;$i<sizeof($newsdir2);$i++){?>
<li><a href="/news/news<?php if($_GET[faid]=='18'){echo '2';}?>.php?faid=<?=$_GET[faid]?>&ndir2=<?=$newsdir2[$i][id_newsdir]?>" <?php if($_GET[ndir2]==$newsdir2[$i][id_newsdir]){echo 'class="link_navi_red"';}else{echo 'class="link_aboutnavi"';}?>><?=$newsdir2[$i][name]?></a></li>
<?php }?>
</ul>
</div><!--end content_aboutleftmenu!-->

