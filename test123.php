
<?php
$employeeAges["Lisa"] = "28";
$employeeAges["Jack"] = "16";
$employeeAges["Ryan"] = "35";
$employeeAges["Rachel"] = "46";
$employeeAges["Grace"] = "34";
$string = "";
foreach( $employeeAges as $key => $value){
	$string .= $value.',';
	//echo $value.',';
}

echo $string; 
?>

<?php
$citys = array('kand','colombo','matale','galle','trinco');

foreach( $citys as $city){
	$string .= $city.',';
	//echo $value.',';
}

echo $string; 
?>

