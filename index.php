<?php


$string = '{"projectnumber" : "4444","projecdescription" : "4444", "articles" : [{"position":1, "article_id" : 676, "online_text" : "### Behälter; Band I-III nach indiv. Stückliste, Sprache: DE 	- Sprache: de"},{"position":2, "article_id" : 681, "online_text" : "### Behälter; Band I-III nach indiv. Stückliste, Sprache: ### 	- Sprache: en"}]}';
$json = utf8_encode($string);
$json = json_decode($json);
var_dump($json);
die;
//echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');;
$result = md5(time());
echo '<pre>';
var_dump($result);
die;
die;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	
	console.log('hello');
	
	var arr = [],
		float = 0.53125,
		max = 1000000,
		sum = 0.0;
		
	for(var i=0; i<max; i++)
		arr.push(float);
	
	for(var i=0; i<max; i++)
		sum += arr[i];
	
	console.log('what is should be: ' + (float*max));
	console.log('what is: ' + (sum));
})
</script>


<?php
die;

$ar = array();
$max=1000000;
$float = 0.53125;
for($i=0; $i<$max; $i++)
	$ar[$i] = $float;

$sum = 0.0;
for($i=0; $i<$max; $i++)
	$sum += $ar[$i];

echo '<pre>';
echo 'powinno byc: ';
var_dump($max*$float);
echo '<br>';
echo 'wyszlo: ';
var_dump($sum);

die;

$cats_companies_count = array(
	array('cat_id' => 20,
		'company_id' => 200),
	array('cat_id' => 19,
		'company_id' => 207),
	array('cat_id' => 19,
		'company_id' => 207),
	array('cat_id' => 19,
		'company_id' => 208),
	array('cat_id' => 19,
		'company_id' => 209),
	array('cat_id' => 19,
		'company_id' => 210),
	array('cat_id' => 17,
		'company_id' => 209),
	array('cat_id' => 17,
		'company_id' => 212),
	array('cat_id' => 17,
		'company_id' => 213),
	array('cat_id' => 16,
		'company_id' => 200),
	array('cat_id' => 16,
		'company_id' => 201),
	array('cat_id' => 15,
		'company_id' => 204),
);
#17 - rodzic 18


//first loop
$cats_companies_array = array();
if($cats_companies_count)
{
	foreach($cats_companies_count as $cats_company)
	{
//		if($cats_company['cat_id']==17)
//		{
//			
//		}
		
		if(!isset($cats_companies_array[$cats_company['cat_id']]))
			$cats_companies_array[$cats_company['cat_id']] = array();
		
		$cats_companies_array[$cats_company['cat_id']][] = $cats_company['company_id'];
	}
}


//second loop
$cats_companies_array2 = array();
if($cats_companies_array)
{
	foreach($cats_companies_array as $cat_id=>$company_ids)
	{
		if($cat_id==17)
		{
			
		}
	}	
}

echo '<pre>';
//var_dump($cats_companies_count);
var_dump($cats_companies_array);
die;
$datetime="2016-06-16 16:30:00";
$day = date('l', strtotime($datetime));
echo $day;
die;
foreach($tab as $key=>$val)
{
	echo $key . ": " . $val . "<br>";
}
unset($tab[3]);
$tab[] = "kevin";
foreach($tab as $key=>$val)
{
	echo $key . ": " . $val . "<br>";
}
die;
//suma ciagu fibonacciego do wartosci 4mln, biorac pod uwage jedynie liczby parzyste
$i = 0;
$suma = 0;
while(true)
{
	$val = ciag_fibonacciego($i);
	if($val>4000000)
		break;
	if($val%2==0)
		$suma += $val;
	$i++;
}
echo "suma: $suma<br>";
echo "ilosc wyrazow: $i<br>";

function ciag_fibonacciego($n)
{
	static $cache = array();
	
	if(isset($cache[$n]))
		return $cache[$n];	
	if($n<2)
		$val = $n;
	else
	{
		$val_prev_1 = isset($cache[$n-1]) ? $cache[$n-1] : ciag_fibonacciego($n-1);
		$val_prev_2 = isset($cache[$n-2]) ? $cache[$n-2] : ciag_fibonacciego($n-2);		
		$val = $val_prev_1 + $val_prev_2;
	}
	$cache[$n] = $val;	
	return $val;
}
