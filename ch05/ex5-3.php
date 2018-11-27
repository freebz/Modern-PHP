// 예제 5-3 사용자 이메일 주소 위험 제거

<?php
$email = 'john@example.com';
$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);
