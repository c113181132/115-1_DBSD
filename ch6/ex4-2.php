<?php
function printHeader(){
    echo"<h3>SID : C113181132</h3>";
    echo"<h3>Name : 吳宗翰</h3>";
    echo"<h3>EX06</h3>";
    
}
$weight = 75;
$bmi = function ($height) use ($weight) {
    $height = $height / 100.0;
    return $weight / $height / $height;
};
printHeader();

$h = 175;
echo "BMI = ". $bmi($h) . "<br/>";