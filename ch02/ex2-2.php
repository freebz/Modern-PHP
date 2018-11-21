// 예제 2-2 기본 별칭을 사용한 네임스페이스

<?php
use Symfony\Component\HttpFoundation\Response;

$response = new Response('앗', 400);
$response->send();
