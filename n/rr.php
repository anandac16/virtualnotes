<?php
$nilai = array(
'69009970.17',
'186732860.46',
'513515366.26',
'29430722.57',
'71301566.141989',
'192933649.56068',
'530567536.29186',
'30408020.854672'
);

foreach($nilai as $val){
	echo $val;
	echo"<br>";
	$out += $val;
}

echo"Total: $out";
