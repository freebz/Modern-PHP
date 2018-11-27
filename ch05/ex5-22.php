// 예제 5-22 결과를 연관 배열로 받기

<?php
// SQL 쿼리 작성 및 실행
$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET, 'email');
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->execute();


// 결과 순회
while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $result['email'];
}
