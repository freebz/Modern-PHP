// 예제 2-11 DocumentStore 클래스 정의

<?php
$documentStore = new DocumentStore();

// HTML 문서 추가
$htmlDoc = new HtmlDocument('https://php.net');
$documentStore->addDocument($htmlDoc);

// 스트림 문서 추가
$streamDoc = new StreamDocument(fopen('stream.txt', 'rb'));
$documentStore->addDocument($streamDoc);

// 터미널 명령 문서 추가
$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());
