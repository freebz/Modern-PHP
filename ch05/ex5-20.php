// 예제 5-20 이메일 주소에 대해 준비된 구문

<?php
$sql = 'SELECT id FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);

$email = filter_input(INPUT_GET, 'email');
$statement->bindValue(':email', $email);
