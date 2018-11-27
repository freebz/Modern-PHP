// 예제 5-25 행을 객체로 가져오는 준비된 구문

<?php
// SQL 쿼리 작성 및 실행
$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET, 'email');
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->execute();


// 결과 순회
while (($result = $statement->fetchObject()) !== false) {
    echo $result->email;
}
