<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
call_user_func(function ($packageKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($packageKey, 'Configuration/TypoScript', 'JS Consent');
}, 'js_consent');
call_user_func(function ($packageKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($packageKey, 'Configuration/TypoScript/BasicCss', 'JS Consent (Basic Css)');
}, 'js_consent');

