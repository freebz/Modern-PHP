// 예제 5-37 DirtyWordsFilter 스트림 필터 사용

<?php
$handle = fopen('data.txt', 'rb');
stream_filter_append($handle, 'dirty_words_filter');
while (foef($handle) !== true) {
    echo fgets($handle);  // <- 검열된 텍스트를 출력한다.
}
fclose($handle);
