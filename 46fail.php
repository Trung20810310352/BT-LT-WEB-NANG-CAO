<?php
//Viết hàm PHP để tìm các chiều cao của top 3 tòa nhà theo chiều giảm dần từ 8 tòa nhà cho trước
  $heights = array();
  while($line = fgets(STDIN)) {
    rtrim($line, "<br>");
    array_push($heights, (int)$line);
  }
  rsort($heights);
  print("Heights of the top three buildings:<br>");
  echo $heights[0]."<br>";
  echo $heights[1]."<br>";
  echo $heights[2]."<br>";
?>