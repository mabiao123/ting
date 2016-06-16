<!-- 
<?php
// header("Content-type: text/html; charset=utf-8");
// 	$arr=array(18,36,2,9,84,6,110,3,50);
// 	rsort($arr);
// 	print_r($arr);
// 	$aa=array_splice($arr,5);
// 	//print_r($aa);
// 	sort($aa);
// 	//print_r($aa);
// 	foreach ($arr as $k => $v) {
// 		echo $v.',';
// 		if($k+1 !=count($arr)){
// 			echo $aa[$k].',';
		//}
	//}
?>
 -->
 <?php
$shu = '35,1,2,3,4,56,78,100';
print_r($shu);
echo "<br>";
$shu = explode(',', $shu);
rsort($shu);
$num = count($shu);
$arr = '';
if($num%2==0){
	$num_1 = $num/2;
	$new1 = array_slice($shu, 0,-$num_1);
	$new2 = array_slice($shu, $num_1);
	sort($new2);
	foreach ($new1 as $key => $v) {
		$arr .= ','.$v.','.$new2[$key];
	}
	$arr = substr($arr, 1);
}else{
	$num = $num - 1;
	$num_1 = $num/2;
	$new1 = array_slice($shu, 0,-$num_1-1);
	$new2 = array_slice($shu, $num_1+1);
	sort($new2);
	foreach ($new1 as $key => $v) {
		$arr .= ','.$v.','.$new2[$key];
	}
	$arr .= ','.$shu[$num_1];
	$arr = substr($arr, 1);
}
print_r($arr);