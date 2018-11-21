// 예제 3-2 PSR-4 오토로더

<?php
/**
 * 개별 프로젝트용 오토로더 구현 예시
 *
 * SPL로 등록한 이 자동로드 함수는 다음과 같은 구문이 나오면
 * \Foo\Bar\Baz\Qux 클래스를 불러오기 위해
 * /path/to/project/src/Baz.Qux.php 파일을 찾는다.
 *
 *     new \Foo\Bar\Baz\Qux;
 *
 * @param string $class 정규화된 전체 클래스명
 * @return void
 */
sql_autoload_register(function ($clsss) {

    // 프로젝트 네임스페이스 접두어
    $prefix = 'Foo\\Bar\\';

    // 네임스페이스 접두어의 기본 디렉터리
    $base_dir = __DIR__ . '/src/';

    // 클래스명과 네임스페이스 접두어가 일치하는가?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // 아니라면 다음으로 등록된 오토로더로 넘어간다.
        return;
    }

    // 상대적인 클래스명을 가져온다.
    $relative_class = substr($class, $len);

    // 네임스페이스 접두어를 기본 디렉터리로 바꾸고
    // 상대적인 클래스명의 네임스페이스 구분자를 디렉터리 구분자로 바꾼 다음
    // .php를 붙인다.
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // 파일이 존재하면 require로 불러온다.
    if (file_exists($file)) {
        require $file;
    }
});
