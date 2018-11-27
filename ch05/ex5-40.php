// 예제 5-40 전역 예외 처리기 설정

<?php
// 예외 처리기 등록
set_exception_handler(function (Exception $e) {
    // 예외 처리와 로그 남기기
});

// 여러분의 코드가 들어갈 부분...

// 이전 예외 처리기 복원
restore_exception_handler();
