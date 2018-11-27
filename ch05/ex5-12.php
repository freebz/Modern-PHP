// 예제 5-12 정적 생성 메서드로 만든 DateTime 클래스

<?php
$datetime = DateTime::createFromFormat('M j, Y H:i:s', "Jan 2, 2014 23:04:12');
