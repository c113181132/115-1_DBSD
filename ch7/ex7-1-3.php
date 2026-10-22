
<?php
echo "EX02<br/>";
echo "<h3>SID : C113181132</h3>";
echo "<h3>Name : 吳宗翰</h3>";
$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $element) {
    echo "element: " . $element . "<br/>";
    $total += $element;
}

echo "Total: " . $total . "<br/>";

print_r($scores);
?>
