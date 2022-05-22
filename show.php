<!DOCTYPE html> <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="gb2312" />
     <title>定位管理平台</title>
    <style>
      body{text-align:center}
    </style>
  </head>
  <body>
 

  <tr><font face="楷体"; color="green" size="50">定位管理平台</font></tr>
<div style="text-align:left; width:100%; font-size:12px;border:2px dashed #c03;">
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
$arr_click=$user;
if(!isset($_GET['page']))  
{  
    $page = 1;  
}  
else  
{  
 $page=$_GET['page'];  
}  
$size=5;//每页显示的记录数  
$pnum = ceil(count($arr_click) / $size);  //总页数，ceil()函数用于求大于数字的最小整数  
//用array_slice(array,offset,length) 函数在数组中根据条件取出一段值;array(数组),offset(元素的开始位置),length(组的长度)  
$newarr = array_slice($arr_click, ($page-1)*$size, $size);  
for($i=0;$i<count($newarr);$i++)  
{  
 echo $newarr[$i]."<br/>";  
}  
?>  
</div>
  
<?php   
if(isset($_GET['page']) and $_GET['page']>1){   
?>  
<a href="see.php?page=<?php echo $page-1;?>">上一页</a>  
<?php } ?>  
  
<?php   
   //var_dump($_GET['page']);  
   if(!isset($_GET['page']) and $pnum>1){        
?>  

<a href="see.php?page=<?php echo $page+1;?>">下一页</a>  
<?php } elseif(isset($_GET['page']) and $_GET['page']<$pnum) { ?>  
<a href="see.php?page=<?php echo $page+1;?>">下一页</a>  
<?php } ?>  

</table>
</body>
</html>

