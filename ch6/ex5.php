echo "EX01<br/>";
echo "<h3>SID : C113181132</h3>";
echo "<h3>Name : 吳宗翰</h3>";
<?php
// 定義匯率換算函式
function rateExchange($amount, $rate) {
    return $amount * $rate;
}

// 設定美金金額
$amount = 1000;

// 設定匯率
$rate = 28.1;

// 呼叫函數
$result = rateExchange($amount, $rate);

// 顯示換算結果
print "1000美金兌換新台幣=" . $result . "元<br/>";
?>
