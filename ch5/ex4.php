# SID:C113181132 <BR>
# Name:吳宗翰 <BR>
# EX04
<HR>
<?php
$total = 0;
for ($i = 0; $i <= 15; $i++) {
    if ($i % 2 == 1)
        continue;
    echo "| " . $i;
    $total += $i;
    
}