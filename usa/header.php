<?php
/**
 * Sub-dir wrapper for the canonical sitewide header.
 *
 * The canonical header at includes/header.php uses absolute URLs (starting
 * with "/") so it resolves correctly from any subdirectory. This wrapper
 * keeps navigation, mega-menu and brand identical to the rest of the site.
 *
 * Replaced inconsistent legacy headers with this unified wrapper to avoid
 * drift between sub-dir and canonical navigation.
 */
include __DIR__ . '/../includes/header.php';
