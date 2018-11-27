// 예제 5-43 모놀로그를 사용한 개발 로깅

<?php
// 컴포저 오토로더 사용
require 'path/to/vendor/autoload.php';

// 모놀로그 네임스페이스 불러오기
use Monolog\Logger;
use MOnolog\Handler\StreamHandler;

// 모놀로그 로거 설정
$log = new Logger('my-app-name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));
