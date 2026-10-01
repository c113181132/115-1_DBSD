# SID: C113181132<BR>
# Name: 吳宗翰<BR>
EX02
<HR>

<?php

// 指定變數值
$name = "myName";

// 動態變數名稱
$$name = "陳允東";

// 取出動態變數的值
$username = $$name;
$username1 = ${$name};

?>