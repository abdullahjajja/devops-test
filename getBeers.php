<?php
$url = 'https://api.punkapi.com/v2/beers'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$Bears = json_decode($data); // decode the JSON feed
$Bears_arr=array();
foreach ($Bears as $bear) {
 $Bears_arr[$bear->name]=$bear->abv;
}
asort($Bears_arr);

if(isset($argv[1])) {
	foreach($Bears_arr as $Key => $value) {
		if($value > $argv[1]){
		echo $Key.','.$value;
		echo "\n";
		}
	}
} else {
	foreach($Bears_arr as $Key => $value) {
		echo $Key.','.$value;
		echo "\n";
		
	}
}
?>