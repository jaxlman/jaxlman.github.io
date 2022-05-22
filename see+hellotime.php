<!DOCTYPE html> <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="gb2312" />
     <title>定位管理平台</title>
    <style>
      tr{border:2px solid #000;}
      body{text-align:center}
    </style>
  <script type="text/javascript">
var fireworks = function(){
this.size = 20;
this.rise();
}
fireworks.prototype = {
color:function(){
var c = ['0','3','6','9','c','f'];
var t = [c[Math.floor(Math.random()*100)%6],'0','f'];
t.sort(function(){return Math.random()>0.5?-1:1;});
return '#'+t.join('');
},
aheight:function(){
var h = document.documentElement.clientHeight-250;
return Math.abs(Math.floor(Math.random()*h-200))+201;
},
firecracker:function(){
var b = document.createElement('div');
var w = document.documentElement.clientWidth;
b.style.position = 'absolute';
b.style.color = this.color();
b.style.bottom = 0;
b.style.left = Math.floor(Math.random()*w)+1+'px';
document.body.appendChild(b);
return b;
},
rise:function(){
var o = this.firecracker();
var n = this.aheight();
var c = this.color;
var e = this.expl;
var s = this.size;
var k = n;
var m = function(){
o.style.bottom = parseFloat(o.style.bottom)+k*0.1+'px';
k-=k*0.1;
if(k<2){
clearInterval(clear);
e(o,n,s,c);
}
}
o.innerHTML = '.';
if(parseInt(o.style.bottom)<n){
var clear = setInterval(m,20);
}
},
expl:function(o,n,s,c){
var R=n/3,Ri=n/6,Rii=n/9;
var r=0,ri=0,rii=0;
for(var i=0;i<s;i++){
var span = document.createElement('span');
var p = document.createElement('i');
var a = document.createElement('a');
span.style.position = 'absolute';
span.style.fontSize = n/10+'px';
span.style.left = 0;
span.style.top = 0;
span.innerHTML = '*';
p.style.position = 'absolute';
p.style.left = 0;
p.style.top = 0;
p.innerHTML = '*';
a.style.position = 'absolute';
a.style.left = 0;
a.style.top = 0;
a.innerHTML = '*';
o.appendChild(span);
o.appendChild(p);
o.appendChild(a);
}
function spr(){
r += R*0.1;
ri+= Ri*0.06;
rii+= Rii*0.06;
sp = o.getElementsByTagName('span');
p = o.getElementsByTagName('i');
a = o.getElementsByTagName('a');
for(var i=0; i<sp.length;i++){
sp[i].style.color = c();
p[i].style.color = c();
a[i].style.color = c();
sp[i].style.left=r*Math.cos(360/s*i)+'px';
sp[i].style.top=r*Math.sin(360/s*i)+'px';
sp[i].style.fontSize=parseFloat(sp[i].style.fontSize)*0.96+'px';
p[i].style.left=ri*Math.cos(360/s*i)+'px';
p[i].style.top=ri*Math.sin(360/s*i)+'px';
p[i].style.fontSize=parseFloat(sp[i].style.fontSize)*0.96+'px';
a[i].style.left=rii*Math.cos(360/s*i)+'px';
a[i].style.top=rii*Math.sin(360/s*i)+'px';
a[i].style.fontSize=parseFloat(sp[i].style.fontSize)*0.96+'px';
}
R-=R*0.1;
if(R<2){
o.innerHTML = '';
o.parentNode.removeChild(o);
clearInterval(clearI);
}
}
var clearI = setInterval(spr,20);
}
}
window.onload = function(){
function happyNewYear(){
new fireworks();
}
setInterval(happyNewYear,1000);
}
</script>
<style type="text/css"></style>
</head>
<body style="background:#7A8B8B;font:12px Georgia, 'Times New Roman', Times, serif">
 

  <tr><a href="http://182.61.61.90/see.php"><font face="楷体"; color="green" size="50">定位管理平台</font></a>

<p><td><a href="http://www.gzhatu.com/dingwei.html"><font face="黑体"; color="red" size="2">经纬度定位</font></a></t></td>
   <td><a href="http://www.lemedu.com/ip/"><font face="黑体"; color="blue" size="2">ip定位</font></a></td>
   </p></tr>
<td><font face="黑体"; color:#473C8B size="5"><?php echo $showtime=date("Y-m-d H:i:s");?></font></td>

<div class="title">
	<?php //foreach($newtws_cache as $value): ?>
	<br><font face="楷体"; color="yellow" size="5">
	
	<script language="JavaScript">
day = new Date( )
nge_Hour = day.getHours( )
var nge_warmprompt = "";
if (nge_Hour == 0)
nge_warmprompt = "现在已经过凌晨了，身体是无价的资本喔，小伙伴早点休息吧！      --猴猴"
if (nge_Hour == 1)
nge_warmprompt = "凌晨1点多了，工作是永远都做不完的，小伙伴别熬坏身子！     --猴猴"
if (nge_Hour == 2)
nge_warmprompt = "亲爱的小伙伴该休息了，身体可是革命的本钱啊！      --猴猴"
if (nge_Hour == 3)
nge_warmprompt = "夜深了，熬夜很容易导致身体内分泌失调，长痘痘的！      --猴猴"
if (nge_Hour == 4)
nge_warmprompt = "四点过了额(⊙o⊙)…，你明天不学习工作吗？？？      --猴猴"
if (nge_Hour == 5)
nge_warmprompt = "你知道吗，此时是国内网络速度最快的时候！      --猴猴"
if (nge_Hour == 6)
nge_warmprompt = "清晨好，这么早就来网站啦，谢谢小伙伴的关注哦，昨晚做的梦好吗？      --猴猴 "
if (nge_Hour == 7)
nge_warmprompt = "新的一天又开始了，祝你过得快乐!      --猴猴"
if (nge_Hour == 8)
nge_warmprompt = "小伙伴早上好哦，一天之际在于晨，又是美好的一天！      --猴猴"
if ((nge_Hour == 9) || (nge_Hour ==10))
nge_warmprompt = "上午好！今天你看上去好精神哦！      --猴猴"
if (( nge_Hour == 11) || (nge_Hour == 12))
nge_warmprompt = "小伙伴啊！该吃午饭啦！有什么好吃的？您有中午休息的好习惯吗？      --猴猴"
if (( nge_Hour >= 13) && (nge_Hour <= 17))
nge_warmprompt = "下午好！外面的天气好吗？记得朵朵白云曾捎来朋友殷殷的祝福。      --猴猴"
if (( nge_Hour >= 17) && (nge_Hour <= 18))
nge_warmprompt = "太阳落山了！快看看夕阳吧！如果外面下雨，就不必了 ^_^      --猴猴"
if (( nge_Hour >= 18) && (nge_Hour <= 19))
nge_warmprompt = "晚上好，小伙伴今天的心情怎么样？去留言板诉说一下吧！      --猴猴"
if (( nge_Hour >= 19) && (nge_Hour <= 21))
nge_warmprompt = "忙碌了一天，累了吧？去看看最新的新闻资讯醒醒脑吧！      --猴猴"
if (( nge_Hour >= 22) && (nge_Hour <= 23))
nge_warmprompt = "这么晚了，小伙伴还在上网？早点洗洗睡吧，睡前记得洗洗脸喔！明天一天都会萌萌哒！      --猴猴"
document.write("<div><i class='fa fa-beer'></i> ")
document.write(nge_warmprompt)
document.write("</div>")
</script>
	</font>
	</a>
</div>

<div style="text-align:left; width:100%; font-size:15px;border:2px dashed #c03;">
<?php

$file = fopen("b.txt", "r");
$user=array();
$i=0;
//输出文本中所有的行，直到文件结束为止。
while(! feof($file))
{
 $user[$i]=fgets($file);//fgets()函数从文件指针中读取一行
 $i++;
}
fclose($file);
$user=array_filter($user);
$arr_click=array_reverse($user);
if(!isset($_GET['page']))  
{  
    $page = 1;  
}  
else  
{  
 $page=$_GET['page'];  
}  
$size=20;//每页显示的记录数  
$pnum = ceil(count($arr_click) / $size);  //总页数，ceil()函数用于求大于数字的最小整数  
//用array_slice(array,offset,length) 函数在数组中根据条件取出一段值;array(数组),offset(元素的开始位置),length(组的长度)  
$newarr = array_slice($arr_click, ($page-1)*$size, $size);  
for($i=0;$i<count($newarr);$i++)  
{  
 echo $newarr[$i]."<br/>"."<br/>"; 
}  
?>  
</div>
  
<?php   
if(isset($_GET['page']) and $_GET['page']>1){   
?>  
<a href="see.php?page=<?php echo $page-1;?>"><font face="黑体"; color="gray" size="2">上一页</font></a>  
<?php } ?>  
  
<?php   
   //var_dump($_GET['page']);  
   if(!isset($_GET['page']) and $pnum>1){        
?>  

<a href="see.php?page=<?php echo $page+1;?>"><font face="黑体"; color="yellow" size="2">下一页</font></a>  
<?php } elseif(isset($_GET['page']) and $_GET['page']<$pnum) { ?>  
<a href="see.php?page=<?php echo $page+1;?>"><font face="黑体"; color="gray" size="2">下一页</font></a>  
<?php } ?>  

</table>


<audio autoplay>
    <source src="http://www.xmbsh.com/themass.mp3" loop="999" type="audio/mpeg">

</body>
</html>

