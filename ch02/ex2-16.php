// 예제 2-16 (나쁜) 제너레이터 사용 방법

<?php
function makeRange($length) {
    $dataset = [];
    for ($i = 0; $i < $length; $i++) {
        $dataset[] = $i;
    }

    return $dataset;
}

$suctomRange = makeRange(1000000);
foreach ($suctomRange as $i) {
    echo $i, PHP_EOL;
}
