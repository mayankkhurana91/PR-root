<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PingAndReceiveExtention.Pingreceive',
            'Information',
            [
                'Orders' => 'list, show, new, create, edit, update, delete',
                'Dishes' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Orders' => 'create, update, delete',
                'Dishes' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PingAndReceiveExtention.Pingreceive',
            'Management',
            [
                'Orders' => 'list, show, new, create, edit, update, delete',
                'Dishes' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Orders' => 'create, update, delete',
                'Dishes' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        iconIdentifier = pingreceive-plugin-information
                        title = LLL:EXT:pingreceive/Resources/Private/Language/locallang_db.xlf:tx_pingreceive_information.name
                        description = LLL:EXT:pingreceive/Resources/Private/Language/locallang_db.xlf:tx_pingreceive_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceive_information
                        }
                    }
                    management {
                        iconIdentifier = pingreceive-plugin-management
                        title = LLL:EXT:pingreceive/Resources/Private/Language/locallang_db.xlf:tx_pingreceive_management.name
                        description = LLL:EXT:pingreceive/Resources/Private/Language/locallang_db.xlf:tx_pingreceive_management.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceive_management
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'pingreceive-plugin-information',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:pingreceive/Resources/Public/Icons/user_plugin_information.svg']
			);
		
			$iconRegistry->registerIcon(
				'pingreceive-plugin-management',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:pingreceive/Resources/Public/Icons/user_plugin_management.svg']
			);
		
    }
);
