// 예제 5-24 한 번에 열 하나와 행 하나를 연관 배열로 가져오는 준비된 구문

<?php
// SQL 쿼리 작성 및 실행
$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET, 'email');
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->execute();


// 결과 순회
while (($email = $statement->fetchColumn(1)) !== false) {
    echo $email;
}
