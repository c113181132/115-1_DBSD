
<?php
echo "EX03 <br/>";
echo "<h3>SID : C113181132</h3>";
echo "<h3>Name : 吳宗翰</h3>";
$arr = array(
    "Color" => "Black",
    "name" => "Chen-Hui-An",
    "Shape" => "Triangle",
    100
);

$arr["type"] = "PHP";
unset($arr["type"]);

foreach ($arr as $key => $value) {
    echo "$key=>$value ";
}

echo "<br/>";
print_r($arr);
?>
