<?php
/**
 * ITD GrowthLabs — AI-search meta enhancement helper
 * --------------------------------------------------
 * Emits AI-parseability hints:
 *   1. <meta name="llm-summary">              — plain-English page summary
 *   2. <meta name="llm-content-type">          — page role (playbook, guide, comparison...)
 *   3. <meta name="ai-search-priority">        — high|medium|low citation priority signal
 *   4. Schema.org SpeakableSpecification JSON-LD — Google Assistant / voice signal
 *      that tells crawlers which parts of the page are the primary answer.
 *
 * Usage:
 *   require_once __DIR__ . '/includes/ai_seo.php';
 *   itdgl_ai_seo([
 *      'summary'      => 'ITD GrowthLabs is a senior-led ... ',   // 40-80 words
 *      'content_type' => 'expertise-page',   // or comparison-page, playbook, guide
 *      'priority'     => 'high',              // high|medium|low
 *      'speakable_selectors' => ['h1', 'h2', '.md-hero__sub', '.pb-head p'],
 *      'about'        => ['Jewelry', 'D2C', 'India', 'Digital Marketing'],
 *   ]);
 *
 * Design notes:
 * - llm-* meta tags are proposed conventions (not yet in a W3C spec);
 *   ChatGPT + Perplexity crawlers respect meta they can parse deterministically,
 *   and even if some ignore these, they cost nothing to emit and give humans
 *   viewing source a clear signal.
 * - SpeakableSpecification IS a Schema.org standard and Google Search + Assistant
 *   both use it. It's the strongest technical AI-parseability signal available.
 */

if (!function_exists('itdgl_ai_seo')) {
    function itdgl_ai_seo(array $cfg): void {
        $summary   = trim((string)($cfg['summary'] ?? ''));
        $ctype     = (string)($cfg['content_type'] ?? '');
        $priority  = (string)($cfg['priority'] ?? 'medium');
        $selectors = $cfg['speakable_selectors'] ?? ['h1', 'h2'];
        $about     = (array)($cfg['about'] ?? []);

        // --- llm-* meta tags ---
        if ($summary !== '') {
            echo '    <meta name="llm-summary" content="' . htmlspecialchars($summary, ENT_QUOTES) . "\">\n";
            // Also emit a duplicate under the "description" family — some crawlers only look at this.
            echo '    <meta name="ai-summary" content="' . htmlspecialchars($summary, ENT_QUOTES) . "\">\n";
        }
        if ($ctype !== '') {
            echo '    <meta name="llm-content-type" content="' . htmlspecialchars($ctype, ENT_QUOTES) . "\">\n";
        }
        if ($priority !== '') {
            echo '    <meta name="ai-search-priority" content="' . htmlspecialchars($priority, ENT_QUOTES) . "\">\n";
        }
        // "about" hint — freeform topical tags for LLMs
        if (!empty($about)) {
            $joined = implode(', ', array_map(function($t){ return trim((string)$t); }, $about));
            echo '    <meta name="ai-about" content="' . htmlspecialchars($joined, ENT_QUOTES) . "\">\n";
        }

        // --- Schema.org SpeakableSpecification (WebPage extension) ---
        if (!empty($selectors)) {
            $selectors = array_values(array_unique(array_map('strval', $selectors)));
            $webpage = [
                '@context' => 'https://schema.org',
                '@type'    => 'WebPage',
                'speakable' => [
                    '@type' => 'SpeakableSpecification',
                    'cssSelector' => $selectors,
                ],
            ];
            if ($summary !== '') $webpage['description'] = $summary;
            if (!empty($about))  $webpage['about'] = array_map(function($t){
                return ['@type' => 'Thing', 'name' => trim((string)$t)];
            }, $about);

            echo "    <script type=\"application/ld+json\">\n";
            echo '    ' . json_encode($webpage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
            echo "    </script>\n";
        }
    }
}
