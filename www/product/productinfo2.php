<?php
require "../inc/config.php";

//单个产品
$strSQL = "select * from productinfo where dele='1' and  id_prodinfo='".$_GET[pid]."' order by id_prodinfo desc" ;
$objDB->Execute($strSQL);
$oneprod=$objDB->fields();

$strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$_GET[pid]."' order by id_prodpic asc limit 4" ;
$objDB->Execute($strSQL);
$arrallpic=$objDB->getrows();

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

<div id="pc_rightinfo">

<div id="pc_rightmenu">
<div id="pc_rightmenu1"><a href="product.php?pic=5&pname=<?=urlencode('维他命');?>">维他命&矿物质</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=6&pname=<?=urlencode('植物');?>">天然草本&植物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=7&pname=<?=urlencode('动物');?>">海洋生物&动物</a></div>
<div id="pc_rightmenu1"><a href="product.php?pic=8&pname=<?=urlencode('其他');?>">其他萃取营养素</a></div>

</div><!--end pc_rightmenu!-->

<div id="pc_rightinfoc">
<div style="width:813px;height:830px; ">
<table border="0" width="100%" align="left">
    <tbody>
        <tr>
            <td valign="top" width="50%" align="left">
            <table border="0" width="100%">
                <tbody>
                    <tr>
                        <td><img alt="" width="388" height="281" src="/upload/other/33472873610.jpg" /></td>
                    </tr>
                    <tr>
                        <td>
                        <table border="0" width="100%">
                            <tbody>
                                <tr>
                                    <td class="txt_black" height="30" colspan="2" align="left"><span class="txt_prodinfotitle">成分作用</span>:</td>
                                </tr>
                                <tr>
                                    <td class="txt" width="16%">&nbsp;</td>
                                    <td class="txt" height="100" width="84%" align="left">
                                    <p><strong>婴幼儿服食核桃油的作用：</strong><br />
                                     亚麻酸对胎儿和婴儿的脑部、视网膜、皮肤和肾功能的健康发育十分重要。同时，核桃油中的磷脂含量丰富，能提高记忆和智力水平，是重要的补脑元素 ，也是婴儿大脑神经和视觉功能发育所必须的营养成份．微量元素锌、锰等的组成脑垂体的关键成份；<br />
                                     促进视网膜发育。核桃油中富含天然的亚麻酸及维生素A对视网膜的发育至关重要．防止夜盲症和视力减退，有助于对多种眼疾的治疗；<br />
                                     富含天然维生素A、D－－可促进钙吸收帮助骨骼及牙齿生长；<br />
                                     大量的不饱和脂肪酸，因酸度低且新鲜无污染，可以减少对宝宝肠胃的缓冲力，不会对宝宝内脏器官造成负担．脂肪酸组态接近母乳且&Omega;&mdash;3、&Omega;-6脂肪酸比例为1：6容易被宝宝消化吸收．其中亚油酸可润肠通便；<br />
                                     核桃油中含有丰富的营养成分，促进大脑发育的同时促进头发的生长；<br />
                                     亚油酸及亚麻酸具有消炎及预防缓解湿疹皮炎等作用；<br />
                                     丰富不饱和脂肪酸及天然维生素及微量元素可促进宝宝生长发育、平衡新陈代谢。</p>
                                    <p><strong>成人服食核桃油的作用：</strong><br />
                                     增强免疫力，延缓衰老 <br />
                                     调节人体胆固醇 <br />
                                     补脑、益智，改善记忆<br />
                                     润肠通便，改善睡眠 <br />
                                     促进骨骼、牙齿和头发生长 <br />
                                     补肾护肝、保护前列腺</p>
                                    <p>&nbsp;</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
            <td valign="top" width="50%" align="left">
            <table border="0" width="100%">
                <tbody>
                    <tr>
                        <td height="30">
                        <p><strong>&nbsp;</strong><strong>&nbsp;</strong><strong>&nbsp;</strong><strong>核桃油软胶囊</strong><strong> Walnut Oil</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>&mdash;&mdash;</strong><strong>补肾益脑，增强记忆</strong><strong> </strong></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="txt">
                        <p>主要原料：核桃油 <br />
                        成分含量：亚麻酸6.5～18.0g/100g、亚油酸50.0～69.0 g/100g<br />
                        食用方法及食用量： 6至12个月婴儿：每日1次，每次1粒，将内容物挤出食用； <br />
                        12个月以上儿童：早晚各1次，每次1粒，将内容物挤出食用； <br />
                        6岁以上儿童及成人：每日2次，每次1粒。 <br />
                        规格：500mg*90粒/瓶</p>
                        <p>贮藏方法：置阴凉干燥避光处 <br />
                        保质期：24个月 <br />
                        本品以核桃油为主原料，以法国罗赛洛明胶为胶囊壳，利用进口软胶囊生产线在GMP净化车间，严格按照ISO9001质量标准进行生产的营养食品。</p>
                        <p>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="20">
                        <p><strong>原料常识：</strong><strong> </strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td height="10" valign="top" align="left">
                        </td>
                    </tr>
                    <tr>
                        <td class="txt">
                        <p><br />
                        采用核桃仁为原料，压榨而成的植物油。<br />
                        <br />
                        属于可食用油。新鲜纯正、营养丰富、口感清淡，脂肪酸组态近似母乳，易被消化吸收，是儿童发育期,女性妊娠期及产后康复的高级保健食用油。<br />
                        <br />
                        本品的营养含量： 不饱和脂肪酸含量&ge;92%，亚油酸&Omega;-6&ge;56%、亚麻酸&Omega;-3&ge;14%，富含天然VA、VD等营养物质。酸度&le;0.5,口感清淡无异味,纯生原味,特别适合宝宝娇嫩胃。</p>
                        <p>&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div><!--end pc_rightplist!-->

</div><!--end pc_right!-->

</div><!--end pcontentbox!-->



<? require "../footer.php"; ?>



<script type="text/javascript">
 $("#img01").css("background-image","url(../upload/product/<?=$arrallpic[1][pic]?>)");
 $("#img02").css("background-image","url(../upload/product/<?=$arrallpic[2][pic]?>)");
</script>

</body>
</html>
