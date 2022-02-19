<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>



<?php


# MySQL/MariaDB 指令
$sql = "SELECT * FROM user_table";





# 執行 MySQL/MariaDB 指令
if ($result = mysqli_query($link,$sql)) {
  # 取得結果
  while ($row = $result->fetch_row()) {
    printf ("%s：%d<br>", $row[0], $row[1]);
  }

  # 釋放資源
  $result->close();
} else {
  echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}

# 關閉 MySQL/MariaDB 連線
mysqli_close($link); 
?>
