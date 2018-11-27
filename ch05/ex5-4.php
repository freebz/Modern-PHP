// 예제 5-4 사용자 프로파일에서의 다국어 문자 제거

<?php
$string = "\nIñtërnâtiônàlizætiøn\t";
$safeString = filter_var(
    $string,
    FILTER_SANITIZE_STRING,
    FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
