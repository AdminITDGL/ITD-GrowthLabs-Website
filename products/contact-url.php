<?php
/**
 * Root-relative contact-us URL from any /products/ page.
 */
if (!isset($gl_contact_us)) {
    $gl_contact_us = '/contact-us.php';
    $sn = $_SERVER['SCRIPT_NAME'] ?? '';
    if ($sn !== '' && preg_match('#^(.*)/GROWTHLAB_STATIC/#', $sn, $m)) {
        $gl_contact_us = $m[1] . '/GROWTHLAB_STATIC/contact-us.php';
    }
}
