<?php 
$pythonscript = '\python.exe';
$filepath = '\Master.py';
$filepath2 = '';

//$command = "start $pythonscript $filepath";
//system(pclose(popen("start /B ". $command, "r"))); 
//echo " is currently Running<BR>";

$command1ff = "start $pythonscript $filepath2 firefox";
system(pclose(popen("start /B ". $command1ff, "r")));;
echo " [Firefox] is currently Running<BR>";

$command1c = "start $pythonscript $filepath2 chrome";
system(pclose(popen("start /B ". $command1c, "r")));;
echo "[Chrome] is currently Running<BR>";

echo "<BR>";
echo "<BR>";
?>
