<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PingAndReceiveExtention.Pingreceive',
            'Information',
            'Information-PR'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PingAndReceiveExtention.Pingreceive',
            'Management',
            'Management-PR'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('pingreceive', 'Configuration/TypoScript', 'PingAndReceiveExtention');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingreceive_domain_model_orders', 'EXT:pingreceive/Resources/Private/Language/locallang_csh_tx_pingreceive_domain_model_orders.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingreceive_domain_model_orders');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingreceive_domain_model_dishes', 'EXT:pingreceive/Resources/Private/Language/locallang_csh_tx_pingreceive_domain_model_dishes.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingreceive_domain_model_dishes');

    }
);
