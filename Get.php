<?php 
  $getIp=$_SERVER["REMOTE_ADDR"];
  echo 'IP:',$getIp;
  echo '<br/>';
  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=Qtmz13FgnvwSCKGG2KXqwlQ29McGQmpF&ip={$getIp}&coor=bd09ll");
  $json = json_decode($content);

  
  $log=$json->{'content'}->{'point'}->{'x'}."|";//���㼶��ϵ��ȡ��������
  echo 'log:',$log;
  echo '<br/>';
  $lat=$json->{'content'}->{'point'}->{'y'}."|";//���㼶��ϵ��ȡγ������
  echo 'lat:',$lat;	 
  echo '<br/>';
  $address=$json->{'content'}->{'address'};//���㼶��ϵ��ȡaddress����
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