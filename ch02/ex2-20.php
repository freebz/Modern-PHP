// 예제 2-20 array_map 클로저

<?php
$numbersPlusOne = array_map(function ($number) {
    return $number + 1;
}, [1,2,3]);
print_r($numbersPlusOne);
// 출력 --> [2,3,4]
