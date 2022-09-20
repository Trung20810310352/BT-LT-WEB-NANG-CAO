<?php
//Viết một chương trình PHP để kiểm tra xem ba độ dài đã cho (số nguyên) của ba cạnh có tạo thành một tam giác vuông. In "Có" nếu các cạnh cho trước tạo thành tam giác vuông, nếu không thì in "Không"
$a = 5;
$b = 3;
$c = 4;
$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $a + $c == $b || $b + $c == $a){
    echo "YES<br>";
}
else
{
    echo "NO<br>";
    }
?>