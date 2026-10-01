# SID: C113181132<BR>
# Name: 吳宗翰<BR>
EX02
<HR>

<?php

$name = "myName";

$$name = "陳允東";

$username = $$name;
$username1 = ${$name};

echo "變數\$name = " . $name . "<br/>";
echo "變數\$myName = " . $myName . "<br/>";
echo "變數\$myName = " . $$name . "<br/>";
echo "變數\$username = " . $username . "<br/>";
echo "變數\$username1 = " . $username1 . "<br/>";

?>