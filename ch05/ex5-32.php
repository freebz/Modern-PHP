// 예제 5-32 string.toupper 스트림 필터 예제

<?php
$handle = fopen('data.txt', 'rb');
stream_filter_append($handle, 'string.toupper');
while(feof($handle) !== true) {
    echo fgets($handle);  // <-- 모두 대문자로 출력됨
}
fclose($handle);
