<?php
/**
 * Root-relative contact-us URL from any /services/ page.
 * Live site (itdgrowthlabs.com): /contact-us.php — NOT /services/contact-us.php
 * Local XAMPP: /static-sites/GROWTHLAB_STATIC/contact-us.php when under that folder.
 */
if (!isset($gl_contact_us)) {
    $gl_contact_us = '/contact-us.php';
    $sn = $_SERVER['SCRIPT_NAME'] ?? '';
    if ($sn !== '' && preg_match('#^(.*)/GROWTHLAB_STATIC/#', $sn, $m)) {
        $gl_contact_us = $m[1] . '/GROWTHLAB_STATIC/contact-us.php';
    } elseif ($sn !== '' && strpos($sn, '/services/') !== false) {
        $before = strstr($sn, '/services/', true);
        $prefix = ($before === false) ? '' : $before;
        $gl_contact_us = $prefix . '/contact-us.php';
    }
}
