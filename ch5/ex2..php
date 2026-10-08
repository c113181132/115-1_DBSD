# SID:C113181132 <BR>
# Name:吳宗翰 <BR>
# EX02
<HR>
<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    print "|" . $i;
    $total += $i;
}
echo "<HR>";
echo "總和: " . $total;