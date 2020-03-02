<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.EstadisticaUnalNew',
            'Listcategorias',
            [
                'Categoria' => 'list',
                'Atributo' => 'list'
            ],
            // non-cacheable actions
            [
                'Categoria' => '',
                'Atributo' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.EstadisticaUnalNew',
            'Showprotocolo',
            [
                'Categoria' => 'listProtocolo,list,showProtocolo',
                'Atributo' => 'list'
            ],
            // non-cacheable actions
            [
                'Categoria' => '',
                'Atributo' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    listcategorias {
                        iconIdentifier = estadistica_unal_new-plugin-listcategorias
                        title = LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadistica_unal_new_listcategorias.name
                        description = LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadistica_unal_new_listcategorias.description
                        tt_content_defValues {
                            CType = list
                            list_type = estadisticaunalnew_listcategorias
                        }
                    }
                    showprotocolo {
                        iconIdentifier = estadistica_unal_new-plugin-showprotocolo
                        title = LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadistica_unal_new_showprotocolo.name
                        description = LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadistica_unal_new_showprotocolo.description
                        tt_content_defValues {
                            CType = list
                            list_type = estadisticaunalnew_showprotocolo
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'estadistica_unal_new-plugin-listcategorias',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:estadistica_unal_new/Resources/Public/Icons/user_plugin_listcategorias.svg']
			);
		
			$iconRegistry->registerIcon(
				'estadistica_unal_new-plugin-showprotocolo',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:estadistica_unal_new/Resources/Public/Icons/user_plugin_showprotocolo.svg']
			);
		
    }
);
