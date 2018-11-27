// 예제 5-41 전역 오류 처리기

<?php
// 오류 처리기 등록
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        // error_reporting 설정에 지정되지 않은 오류는
        // 무시함
        return;
    }

    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

// 여러분의 코드가 들어갈 부분...

// 이전 오류 처리기 복원
restore_error_handler();
