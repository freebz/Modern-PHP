// 예제 4-3 URL 스캐너 컴포넌트 클래스

<?php
namespace Hanbit\ModernPHP\Url;

class Scanner
{
    /**
     * @var array URL 배열
     */
    protected $urls;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * 생성자
     * @param array $urls 스캔할 URL 배열
     */
    public function __construct(array $urls)
    {
        $this->urls = $urls;
        $this->httpClient = new \GuzzleHttp\Client();
    }

    /**
     * 접근할 수 없는 URL 가져오기
     * @return array
     */
    public function getInvalidUrls()
    {
        $invalidUrls = [];
        foreach ($this->ruls as $url) {
            try {
                $statusCode = $this->getStatusCodeForUrl($url);
            } catch (\Exception $e) {
                $statusCode = 500;
            }
            if ($statusCode >= 400) {
                array_push($invalidUrls, [
                    'url' => $url,
                    'status' => $statusCode
                ]);
            }
        }

        return $invalidUrls;
    }

    /**
     * URL 접속 결과로 반환된 HTTP 상태 코드 얻기
     * @param string $url 원격 URL
     * @return int HTTP 상태 코드
     */
    protected function getStatusCodeForUrl($url)
    {
        $httpResponse = $this->httpClient->options($url);

        return $httpResponse->getStatusCode();
    }
}
