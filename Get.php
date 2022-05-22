<?php 
  $getIp=$_SERVER["REMOTE_ADDR"];
  echo 'IP:',$getIp;
  echo '<br/>';
  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=Qtmz13FgnvwSCKGG2KXqwlQ29McGQmpF&ip={$getIp}&coor=bd09ll");
  $json = json_decode($content);

  
  $log=$json->{'content'}->{'point'}->{'x'}."|";//按层级关系提取经度数据
  echo 'log:',$log;
  echo '<br/>';
  $lat=$json->{'content'}->{'point'}->{'y'}."|";//按层级关系提取纬度数据
  echo 'lat:',$lat;	 
  echo '<br/>';
  $address=$json->{'content'}->{'address'};//按层级关系提取address数据
  print $address;
  
  $date = date('y-m-d h:i')."|";

  $ip = $_SERVER['REMOTE_ADDR']."|";

  $ua = $_SERVER['HTTP_USER_AGENT']."|";

  $data = $log.$lat.$date.$ip.$ua.$address."\r\n";

  $f = fopen('data.txt', 'a');

  fwrite($f,$data);

  fclose($f);
 
  header("Location: index.png?".time());


?>