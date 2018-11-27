// 예제 5-36 사용자 정의 스트림 필터 DirtyWordsFilter 등록

<?php
stream_filter_register('dirty_words_filter', 'DirtyWordsFilter');
