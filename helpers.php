<?php

declare(strict_types=1);

use Site\Core\Application;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!function_exists('app')) {
    /**
     * @return Application
     */
    function app()
    {
        if (!isset($GLOBALS['SITE_APP'])) {
            $GLOBALS['SITE_APP'] = GeneralUtility::makeInstance(
                Application::class,
                dirname(dirname(__DIR__))
            );
        }

        return $GLOBALS['SITE_APP'];
    }

    app();
}
