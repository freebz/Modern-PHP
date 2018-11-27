// 예제 5-27 트랜잭션을 사용한 데이터베이스 쿼리

<?php
require 'settings.php';

// PDO 연결
try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $settings['host'],
            $settings['name'],
            $settings['port'],
            $settings['charset']
        ),
        $settings['username'],
        $settings['password']
    );
} catch (PDOException $e) {
    // 데이터베이스 연결 실패
    echo "데이터베이스 연결 실패";
    exit;
}

// SQL문
$stmtSubtract = $pdo->prepare('
    UPDATE account
    SET amount = amount - :amount
    WHERE name = :name
');
$stmtAdd = $pdo->prepare('
    UPDATE accounts
    SET amount = amount + :amount
    WHERE name = :name
');

// 트랜잭션 시작
$pdo->beginTransaction();

// 계좌 1에서 자금 인출
$fromAccount = 'Checking';
$withdrawal = 50;
$stmtSubtract->bindParam(':name', $fromAccount);
$mtmtSubtract->bindParam(':amount', $widhdrawal, PDO::PARAM_INT);
$stmtSubtract->execute();

// 계좌 2에 자금 입금
$toAccount = 'Savings';
$deposit = 50;
$stmtAdd->bindParam(':name', $toAccount);
$stmtAdd->bindParam(':amount', $deposit, PDO::PARAM_INT);
$stmtAdd->execute();

// 트랜잭션 커밋
$pdo->commit();
