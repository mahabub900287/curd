<?php
function add(int $a,int $b){
   $sum=0;
   $sum=$a+$b;
   echo$sum ."</br>";
}
add(10,20);
add(50,4);
?>
<?php
function recursion($a)
{
    if ($a <20) {
        echo "$a";
        recursion($a +1);
        echo"<br>";
        if($a%2==0){
           echo "this is even number:".$a."<br>";
        }else{
           echo"this is odd number:$a" ."<br>";
        }
    }
}
recursion(5,15);
//factorial solution
function factorial($a){
     $fact=1;
     for($i=$a;$i>=1;$i--){
        $fact=$fact*$i;
     }
     echo"fact is $fact"."<br>";   
}
factorial(10);
factorial(5);
echo"<br>";
echo"<br>";
echo"<br>";
///function all list 

 $a=[20,12,12,30];
 var_dump($a);
 var_dump(count($a));
 $b="<p>amar sonar bangla ami tomai valobasi</p>";
 echo htmlspecialchars($b);
 echo("<br>");
 echo chr(65);
 echo("<br>");
 echo implode(",",$a);
 echo("<br>");
 $a="amar sonar bangla ami tomai valobasi";
 echo("<br>");
 print_r(explode(" ",$a));
 echo("<br>");
 echo md5($a);
 echo("<br>");
 echo str_replace("bangla","hindi",$a);
 echo("<br>");
 echo str_word_count($a);
   ?>
   