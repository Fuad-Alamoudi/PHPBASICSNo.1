<?php
$a=[1,5,2,5,1,3,2,4,5];
$b=array();
foreach($a as $a1){
    if(!in_array($a1,$b)){
        array_push($b,$a1);
    }
}
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
// / can use function array_unique(array)
// $b=array_unique($a);
