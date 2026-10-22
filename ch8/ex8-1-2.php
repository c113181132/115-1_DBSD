
echo "<ex04>";
echo "<h3>SID : C113181132</h3>";
echo "<h3>Name : 吳宗翰</h3>";
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>PHP SERVER 變數</title>
</head>
<body>

<h2>PHP $_SERVER 環境變數</h2>

<table border="1">
    <tr>
        <th>變數名稱</th>
        <th>變數內容</th>
    </tr>

    <?php
    // 顯示所有 $_SERVER 變數
    foreach ($_SERVER as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars((string)$value) . "</td></tr>";
    }
    ?>

</table>

</body>
</html>
