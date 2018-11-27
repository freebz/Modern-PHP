// 예제 5-15 DateTimeZone 클래스 사용

<?php
$timezone = new DateTimeZone('Asia/Seoul');
$datetime = new \DateTime('2014-08-20', $timezone);
$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));
