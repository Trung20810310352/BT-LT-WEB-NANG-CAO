<?php
//Viết một chương trình PHP để đọc ngày (từ 2016/1/1 đến 2016/12/31) và in ngày đó ra. Ngày 1 tháng 1 năm 2016, là Thứ Sáu. Lưu ý rằng năm 2016 là một năm nhuận.
$days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
$format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
while (($line = trim(fgets(STDIN))) !== '') {
    sscanf($line, '%d %d', $m, $d);
    if ($m === 0) {
        break;
    }
    $n = $days[$m - 1] + $d;
    $today = $format[$n % 7];
    echo "The day is: ".$today, PHP_EOL;
}
?>