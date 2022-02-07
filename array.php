<?php
//Indexed Arrays
$name=['tamim','sakib','habib','jahid'];
var_dump($name);
$number=array('10','20','30','40','90','12','30');
$acount=0;
$acount=count($number);
for($i=0;$i<=$acount;$i++){
    echo"<br>".$number[$i];
}
$n=[10,54,58,65,57];
foreach($n as $key=>$a){
    echo  $key."=>".$a."<br>";
}
//Associative Arrays 
$name=[
    1=>'rakib',
    2=>'sakib',
    3=>'habib',
];
print_r($name);

//Multidimensional Arrays
$name=[
    'a'=>[10,20,30,
           ['rakib','habib','sohag']],
    'b'=>['red','blue','green']
];
echo"<br>";
print_r($name);
?>