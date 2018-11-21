// 예제 2-21 use 키워드를 이용한 상태 등록

<?php
function enclosePerson($name) {
    return function ($doCommand) use ($name) {
        return sprintf('%s, %s', $name, $doCommand);
    };
}

// "Clay" 문자열을 클로저로 감싼다.
$clay = enclosePerson('Clay');

// 클로저를 호출한다.
echo $clay('차 한잔 부탁해요!');
// 출력 --> "Clay, 차 한잔 부탁해요!"
