// 예제 5-1 htmlentities() 함수로 입력 위험 제거하기

<?php
$input = '<p><script>alert("나이지리아 복권에 당첨되셨습니다!");</script></p>';
echo htmlentities($input, ENT_QUOTES, 'UTF-8');
