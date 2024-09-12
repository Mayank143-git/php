<?php

// $arr = [1,'ranju', true, 1,'deepak',1.8];

// print_r($arr);
// echo "<br>";

$associative =['name' => 'saif' , 'age' =>'500'];

print_r ($associative["name"]);
echo "<br>";

$mul_arr = [['product_name' => 'abc', 'price' => 450],['product_name'=> 'xyz', 'price'=> 750]];

foreach
($mul_arr as $key=> $value){
   print_r($mul_arr[$key]['product_name']);
   echo "<br>";

   print_r($mul_arr[$key]['price']);
   echo "<br>";

}
?>