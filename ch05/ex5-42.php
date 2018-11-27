// 예제 5-42 웁스 처리기 등록

<?php
// 컴포저 오토로더 사용
require 'path/to/vendor/autoload.php';

// 웁스 오류 및 예외 처리기 설정
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
