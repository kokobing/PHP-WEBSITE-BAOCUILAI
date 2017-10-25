var t; 
var speed = 2;//图片切换速度 
var nowlan=0;//图片开始时间 
function changepic() { 
var imglen = $("div[name='pic']").find("div").length; 
$("div[name='pic']").find("div").hide(); 
$("div[name='pic']").find("div").eq(nowlan).fadeIn(600); 
nowlan = nowlan+1 ==imglen ?0:nowlan + 1; 
t = setTimeout("changepic()", speed * 3000); 
} 
onload = function () { changepic(); } 
$(document).ready(function () { 
//鼠标在图片上悬停让切换暂停 
$("div[name='pic']").hover(function () { clearInterval(t); }); 
//鼠标离开图片切换继续 
$("div[name='pic']").mouseleave(function () { changepic(); }); 
}); 