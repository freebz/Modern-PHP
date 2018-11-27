// 예제 5-28 HTTP 스트림 래퍼를 이용한 플리커 API

<?php
$json = file_get_contents(
    'http://api.flickr.com/services/feeds/photos_public.gen?format=json'
);
