<?php echo date("Y-m-d");


$lctime=localtime(time(),true);
echo $lctime["tm_mday"];

echo "<br/>";
echo strftime("%d");
?>