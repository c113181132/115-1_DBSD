
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>靠泊時間判斷系統</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: #f3f6fa;
  padding: 30px;
}
.container {
  max-width: 750px;
  margin: auto;
  background: white;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 3px 12px #ddd;
}
h2 { text-align: center; }
input {
  padding: 10px;
  width: 65%;
  font-size: 16px;
}
button {
  padding: 10px 15px;
  background: #1677d2;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
#result {
  margin: 20px 0;
  font-weight: bold;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  border: 1px solid #ccc;
  padding: 9px;
  text-align: center;
}
th { background: #eaf1fa; }
</style>
</head>
<body>
<div class="container">
  <h2>靠泊時間判斷系統</h2>
  <p>請輸入靠泊時間：</p>
  <input id="time" type="text" placeholder="輸入小時">
  <button onclick="check()">判斷</button>
  <div id="result"></div>

  <h3>測試紀錄</h3>
  <table>
    <thead>
      <tr>
        <th>輸入內容</th>
        <th>實際結果</th>
      </tr>
    </thead>
    <tbody id="records"></tbody>
  </table>
</div>

<script>
function validate(value) {
  const text = value.trim();

  if (text === "") {
    return "請輸入數字";
  }

  if (!/^[+-]?(?:\d+\.?\d*|\.\d+)$/.test(text)) {
    return "請輸入阿拉伯數字";
  }

  const number = Number(text);

  if (number <= 0) {
    return "請輸入正數";
  }

  if (number >= 20) {
    return "長時間靠泊";
  }

  return "一般靠泊";
}

function check() {
  const value = document.getElementById("time").value;
  const result = validate(value);

  document.getElementById("result").textContent =
    "判斷結果：" + result;

  const row = document.createElement("tr");
  const inputCell = document.createElement("td");
  const resultCell = document.createElement("td");

  inputCell.textContent = value || "（空白）";
  resultCell.textContent = result;

  row.append(inputCell, resultCell);
  document.getElementById("records").appendChild(row);
}
</script>
</body>
</html>
