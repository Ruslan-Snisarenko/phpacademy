<?php

 $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня груша груша';

$string=explode(' ',$string);
$string=array_count_values($string);
arsort($string);
foreach($string as $key=>$value){
    echo $key.' - '.$value."\n";
}