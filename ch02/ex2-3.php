// 예제 2-3 클래스명과 다른 별칭을 사용한 네임스페이스

<?php
use Symfony\Component\HttpFoundation\Response as Res;

$r = new Res('앗', 400);
$r->send();
