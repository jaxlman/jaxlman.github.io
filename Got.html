<?php 
  $getIp=$_SERVER["REMOTE_ADDR"];
  echo '<br/>';
  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=Qtmz13FgnvwSCKGG2KXqwlQ29McGQmpF&ip={$getIp}&coor=bd09ll");
  $json = json_decode($content);
  $log=$json->{'content'}->{'point'}->{'x'}."|";
  $lat=$json->{'content'}->{'point'}->{'y'}."|"; 
  $address=$json->{'content'}->{'address'};
  $date = date('Y-m-d H:i:s',time())."|";
  $ip = $_SERVER['REMOTE_ADDR']."|";
  $ua = $_SERVER['HTTP_USER_AGENT']."|";
  $data = $log.$lat.$date.$ip.$ua.$address."\r\n";
  $f = fopen('b.txt', 'a');
  fwrite($f,$data);
  fclose($f);
  header("Location: index.png?".time());
?>