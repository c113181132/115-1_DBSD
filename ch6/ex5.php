
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>PHP與MySQL網頁設計</title>
</head>
<body>

<?php
// 定義匯率換算函式
function rateExchange($amount, $rate) {
    return $amount * $rate;
}

echo "PHP與MySQL網頁設計<br/>";
echo "EX01<br/>";

$amount = 1000;
$rate = 28.1;

// 呼叫函式
$result = rateExchange($amount, $rate);

echo "1000美金兌換新台幣=" . $result . "元<br/>";
echo "PHP與MySQL網頁設計<br/>";
echo "PHP與MySQL網頁設計<br/>";
?>

<hr>
SID:C113181132<br>
Name:吳宗翰

<hr>

</body>
</html>
