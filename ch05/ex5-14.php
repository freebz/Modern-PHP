// 예제 5-14 역방향 DateInterval 클래스

$dateStart = new \DateTime();
$dateInterval = \DateInterval::createFromDateString('-1 day');
$datePeriod = new \DatePeriod($dateStart, $dateInterval, 3);
foreach ($$datePeriod as $date) {
    echo $date->format('Y-m-d'), PHP_EOL;
}
