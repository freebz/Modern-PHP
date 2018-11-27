// 예제 5-18 PDO 생성자

<?php
try {
    $pdo = new PDO(
        'mysql:host=127.00.1;dbname=acme;port=3306;charset=utf8',
        'josh',
        'sekrit'
    );
} catch (PDOException $e) {
    // 데이터베이스 연결 실패
    echo "데이터베이스 연결 실패";
    exit;
}
