// 예제 5-33 php://filter를 이용한 string.toupper 스트림 필터 예제

<?php
$handle = fopen('php://filter/read=string.toupper/resource=data.txt', 'rb');
while(feof($handle) !== true) {
    echo fgets($handle);  // <-- 모두 대문자로 출력됨
}
fclose($handle);
