

<?php

$arr = array(

            0 => array
                (
                    'id_supplier' => array
                        (
                            'type' => 'hidden',
                            'name' => 'id_supplier[]',
                            'value' => 149
                        ),

                    'no_pinv' => array
                        (
                            'type' => 'hidden',
                            'name' => 'no_pinv[]',
                            'value' => 'PII/HSP/17/08/0012',
                            'nilai' => 160000,
                        ),
                ),

            1 => array
                (
                    'id_supplier' => array
                        (
                            'type' => 'hidden',
                            'name' => 'id_supplier[]',
                            'value' => 149
                        ),


                    'no_pinv' => array
                        (
                            'type' => 'hidden',
                            'name' => 'no_pinv[]',
                            'value' => 'PII/HSP/17/08/0012',
                            'nilai' => 63000,
                        ),

                ),

            2 => array
                (
                    'id_supplier' => array
                        (
                            'type' => 'hidden',
                            'name' => 'id_supplier[]',
                            'value' => 150
                        ),

                    'no_pinv' => array
                        (
                            'type' => 'hidden',
                            'name' => 'no_pinv[]',
                            'value' => 'PII/HSP/17/08/0013',
                            'nilai' => 125000,
                        
                        ),

                ),



);
?>
<table style="border: 1px #000 solid;" width="50%">
<tr>
<td>id sup</td>
<td>Invoice</td>
<td>Total</td>
</tr>

<?php
$jml=array();
foreach($arr as $key){
        $val=$key['id_supplier']['value'];
        $jml[0][$val]['nilai']=(isset($jml[$val])?$jml[$val]:0)+$key['no_pinv']['nilai'];
	$jml[0][$val]['type']=$key['no_pinv']['type'];
	$jml[0][$val]['value']=$key['no_pinv']['value'];
	$total +=(isset($jml[$val])?$jml[$val]:0)+$key['no_pinv']['nilai'];
	$jml[0][$val]['total']=$total;
	$jml[0][$val]['id_supplier'] = $val;
}
//echo $jml[0]['PII/HSP/17/08/0012']['value'];
var_dump($jml);
foreach($jml as $val){
	foreach($val as $num => $k){
		echo"<tr>";
		echo"<td>{$k['id_supplier']}</td>";
		echo"<td>{$k['value']}</td>";
		echo"<td>{$k['total']}</td>";
	}

}
?>








