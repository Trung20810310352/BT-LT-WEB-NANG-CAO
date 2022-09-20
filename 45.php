<?php
//Viết 1 chương trình PHP để tính tổng các chữ số của 1 số
function Tong($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo Tong("3535")."\n";
echo Tong("54321")."\n";
?>