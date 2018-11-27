// 예제 5-30 명시적인 file:// 스트림 래퍼

<?php
$handle = fopen('file:///etc/hosts', 'rb');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);
