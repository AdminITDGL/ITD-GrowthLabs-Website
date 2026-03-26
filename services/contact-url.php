<?php
/**
 * Root-relative contact-us URL so links work from any /services/ page
 * (avoids ../ resolving incorrectly with some menus / bases).
 */
if (!isset($gl_contact_us)) {
    $gl_contact_us = '../contact-us.php';
    if (!empty($_SERVER['SCRIPT_NAME']) && preg_match('#^(.*)/GROWTHLAB_STATIC/#', $_SERVER['SCRIPT_NAME'], $m)) {
        $gl_contact_us = $m[1] . '/GROWTHLAB_STATIC/contact-us.php';
    }
}
