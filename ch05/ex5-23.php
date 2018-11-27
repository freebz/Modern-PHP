// 예제 5-23 모든 결과를 연관 배열로 가져오는 준비된 구문

<?php
// SQL 쿼리 작성 및 실행
$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET, 'email');
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->execute();


// 결과 순회
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $result) {
    echo $result['email'];
}
