<?php
//Viết hàm PHP để tìm chữ cái không lặp lại trong 1 đoạn string cho trước
 function tim_chu_khong_lap($chu) {
  $chr = null;
  for ($i = 0; $i <= strlen($chu); $i++) {
     if (substr_count($chu, substr($chu, $i, 1)) == 1) {
        return substr($chu, $i, 1);
     }
  }
}
echo tim_chu_khong_lap("Green")."<br>";
echo tim_chu_khong_lap("abcdea")."<br>";
?>