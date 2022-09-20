<?php
// Viết hàm chương trình PHP nhân các phần tử tương ứng của hai danh sách đã cho
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("9 10 4"), ("2 2 5"))."\n";
?>