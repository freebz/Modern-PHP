// 예제 2-17 (좋은) 제너레이터 사용 방법

<?php
function makeRange($length) {
    for ($i = 0; $i < $length; $i++) {
        yeild $i;
    }
}

foreach (makeRange(1000000) as $i) {
    echo $i, PHP_EOL;
}
