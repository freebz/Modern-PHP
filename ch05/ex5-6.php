// 예제 5-6 htmlentities 함수를 사용한 출력 예외 처리

<?php
$output = '<p><script>alert("NSA 백도어가 설치되었습니다.");</script>';
echo htmlentities($output, ENT_QUOTES, 'UTF-8');
