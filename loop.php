<?php include'heder.php'?>
<main class="pl-4 ml-4">
<?php
$result=1;
echo("<h4>Create a factorial program using a PHP loop.</h4>");
for($i=10;$i>=1;$i--){
    $result=$i*$result;
    echo "$i"."*";
    $i=trim($i,"*");
}
echo"=$result";
echo("<h4>Using while loop print 1 to 10</h4>");
$i=1;
while($i<=10){
    echo"$i"."#";
    $i++;
}
?>
</main>
<?php include'foooter.php'?>