<?php
/**
 * ITD GrowthLabs — IndexNow submission helper
 * -------------------------------------------
 * IndexNow protocol lets us tell Bing (and by extension ChatGPT web-search,
 * Copilot, Yandex, Naver, Seznam) that a URL is new or updated. Pages
 * typically get indexed within minutes-to-hours instead of days.
 *
 * Key setup:
 *   1. Key file lives at /a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8.txt (root)
 *   2. Endpoint: https://api.indexnow.org/IndexNow
 *
 * Usage:
 *   require_once __DIR__ . '/indexnow.php';
 *   itdgl_indexnow_submit(['https://itdgrowthlabs.com/new-page.php']);
 *
 * Batches of up to 10,000 URLs per request. Free. No auth beyond the key file.
 */

if (!defined('ITDGL_INDEXNOW_KEY')) {
    define('ITDGL_INDEXNOW_KEY',      'a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8');
    define('ITDGL_INDEXNOW_HOST',     'itdgrowthlabs.com');
    define('ITDGL_INDEXNOW_KEY_URL',  'https://itdgrowthlabs.com/a3f8b2e1c5d9f7a4e6b0c8d2f5a7e9b1c3d5f7a8.txt');
    define('ITDGL_INDEXNOW_ENDPOINT', 'https://api.indexnow.org/IndexNow');
}

if (!function_exists('itdgl_indexnow_submit')) {
    /**
     * Submit one or more URLs to IndexNow.
     *
     * @param array $urls Absolute URLs on itdgrowthlabs.com (max 10000 per call)
     * @return array{ok:bool, status:int, body:string}
     */
    function itdgl_indexnow_submit(array $urls): array {
        // Filter to itdgrowthlabs.com URLs only — protocol requires same-host.
        $urls = array_values(array_filter($urls, function($u){
            return is_string($u) && stripos($u, 'https://itdgrowthlabs.com/') === 0;
        }));
        if (empty($urls)) return ['ok'=>false, 'status'=>0, 'body'=>'no valid urls'];

        $payload = json_encode([
            'host'        => ITDGL_INDEXNOW_HOST,
            'key'         => ITDGL_INDEXNOW_KEY,
            'keyLocation' => ITDGL_INDEXNOW_KEY_URL,
            'urlList'     => $urls,
        ]);

        $ctx = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
            'content' => $payload,
            'timeout' => 8,
            'ignore_errors' => true,
        ]]);
        $body = @file_get_contents(ITDGL_INDEXNOW_ENDPOINT, false, $ctx);
        $status = 0;
        if (isset($http_response_header) && is_array($http_response_header)) {
            if (preg_match('#HTTP/\S+\s+(\d+)#', $http_response_header[0], $m)) $status = (int)$m[1];
        }
        $ok = ($status >= 200 && $status < 300);

        // Log every submission for audit / debugging (gitignored path)
        $logDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'itdgl_indexnow';
        @mkdir($logDir, 0755, true);
        $logFile = $logDir . DIRECTORY_SEPARATOR . 'submit_' . date('Y-m') . '.log';
        @file_put_contents(
            $logFile,
            sprintf("[%s] status=%d urls=%d %s\n", date('c'), $status, count($urls), $ok ? 'OK' : 'FAIL'),
            FILE_APPEND | LOCK_EX
        );

        return ['ok' => $ok, 'status' => $status, 'body' => (string)$body];
    }
}

if (!function_exists('itdgl_indexnow_urls_from_sitemap')) {
    /**
     * Extract absolute URLs from the site's sitemap.xml.
     * Used to bootstrap: submit-all-known-URLs once, then only send deltas after.
     *
     * @param string|null $sitemapPath  Full path to sitemap.xml (defaults to repo root)
     * @return string[]
     */
    function itdgl_indexnow_urls_from_sitemap(?string $sitemapPath = null): array {
        $path = $sitemapPath ?: (__DIR__ . '/../sitemap.xml');
        if (!is_file($path)) return [];
        $xml = @simplexml_load_file($path);
        if (!$xml) return [];
        $out = [];
        foreach ($xml->url as $u) {
            $loc = trim((string)$u->loc);
            if ($loc && stripos($loc, 'https://itdgrowthlabs.com/') === 0) $out[] = $loc;
        }
        return $out;
    }
}
