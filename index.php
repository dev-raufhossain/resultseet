<?php
$mark = 10;
if($mark >= 80 && $mark <= 100){
    echo "a+";
}elseif($mark >= 70 && $mark <= 79){
    echo "a-";
}elseif($mark >= 60 && $mark <= 69){
    echo "a";
}elseif($mark >= 50 && $mark <= 59){
    echo "b";
}elseif($mark >= 40 && $mark <= 49){
    echo "c";
}elseif($mark >= 33 && $mark <= 39){
    echo "d";
}elseif($mark >= 0 && $mark <= 32){
    echo "Fail";
}else{
    echo "Invalid number";
}

?>

<?php
$a = 5;
$b = 2;
$c = 10;

if($a > $b && $a > $c){
    echo $a;
}elseif($b > $a && $b > $c){
    echo $b;
}else{
echo $c;

}

?>
<?php
$a = [110,"Rauf"];
print_r($a);

?>