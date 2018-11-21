// 예제 2-4 다른 네임스페이스 안의 비정규화된 클래스명

<?php
namespace My\App;

class Foo
{
    public function doSomething()
    {
        $exception = new Exception();
    }
}
