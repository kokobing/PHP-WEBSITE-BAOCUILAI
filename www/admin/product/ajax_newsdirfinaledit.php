<?php  
require "../inc/config_admin.php";
if(isset($_SESSION[user_id])){//if usrer login
$c_url='/admin/product/product_dir.php';//关联主文件
require "../inc/config_perm_ajax.php";//一级目录和二级文件的访问权限判断
  if($ajax_onuserperm_editprem=='1'){
   $newsdir2name = $_REQUEST["newsdir2name"];//menu name
   $fatherid = $_REQUEST["fatherid"];//fatherid
   $newsid = $_REQUEST["newsid"];//selfid
   $isdel = $_REQUEST["isdel"];//是否删除该菜单
   $intro = $_REQUEST["intro"];//简介

   if ($isdel=='1' && $ajax_onuserperm_deleprem=='1'){
   	$strSQL="update productdir set dele='0' where id_proddir='".$newsid."'";
	$objDB->Execute($strSQL);
   }else{
   $strSQL="UPDATE productdir SET fatherid='".$fatherid."',name='".$newsdir2name."',intro='".$intro."' where id_proddir='".$newsid."'";
   //file_put_contents('aa.txt', $strSQL);  
   $objDB->Execute($strSQL);
   }

  $arr['info']="恭喜你,修改成功!";
  $myjson= json_encode($arr);
  echo $myjson;
  }//  if($ajax_onuserperm_editprem=='1') end
}//session end
?>

