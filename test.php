<?php
foreach ($_REQUEST as $key => $value)
{
  if ($key == "co2") {
    $co2 = $value;
  }
  #if ($key == "hour") {
   # $hour = $value;
  #}
}
?>

<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>

<?php



$datetime = date_create()->format('Y-m-d H:i:s');


# MySQL/MariaDB 指令
$sql = "INSERT INTO user_table ( co2 , datetime) VALUES('$co2', '$datetime')";



# 執行 MySQL/MariaDB 指令

if ($result = mysqli_query($link,$sql) === TRUE) {
  $last_id = mysqli_insert_id ($link);
  echo "成功新增資料，新資料 ID：" . $last_id . "上傳時間". $datetime;
} else {
  echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}



# 關閉 MySQL/MariaDB 連線
mysqli_close($link); 
?>