// 예제 5-5 이메일 주소 유효성 검사

<?php
$input = 'john@example.com';
$isEmail = filter_var($input, FILTER_VALIDATE_EMAIL);
if ($isEmail !== false) {
    echo "성공";
} else {
    echo "실패";
}
