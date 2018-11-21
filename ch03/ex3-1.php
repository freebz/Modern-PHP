// 예제 3-1 모놀로그 사용

<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 로거 준비
$log = new Logger('myApp');
$log->pushHandler(new StreamHandler('logs/development.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/production.log', LOGGER::WARNING));

// 로거 사용
$log->debug('디버그 메시지입니다.');
$log->warning('경고 메시지입니다.');
