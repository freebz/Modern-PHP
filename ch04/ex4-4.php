// 예제 4-4 URL 스캐너 컴포넌트 사용

<?php
require 'vendor/autoload.php';

$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Hanbit\ModernPHP\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
