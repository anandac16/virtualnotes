<?php

$k = array('JAYA');
$a = '{}';

if(@count($k)){
	$a = sprintf('{%s}', implode(',',$k));
}
echo $a;
