<?php

//before use of date_default_timezone_set

echo date("d-m-Y h:i:s A");

echo '<br /><br />';

//set to US central time
date_default_timezone_set('Asia/Rangoon');

echo date("d-m-Y h:i:s A");
echo '<br /><br />';
echo date("d-m-Y",1417573589);

$arg="192.168.1.2";
$exp=explode(".",$arg);
echo '<br /><br />';
print(end($exp));


/*echo microtime();*/

?>



