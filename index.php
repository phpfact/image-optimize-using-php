<?php
// $list = ['sachin','ab','red','zoom','ac'];
// sort($list);
// rsort($list);
// print_r($list);


// ==================


$mylist = ['name'=>'sachin', 'age'=>40, 'city'=>'sonipat', 'country'=>'amit'];
// asort($mylist);
// arsort($mylist);
// ksort($mylist);
krsort($mylist);
print_r($mylist);