// 예제 5-29 묵시적인 file:// 스트림 래퍼

<?php
$handle = fopen('/etc/hosts', 'rb');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);
