// 예제 2-1 별칭이 없는 네임스페이스

<?php
$response = new \Symfony\Component\HttpFoundation\Response('앗', 400);
$response->send();
