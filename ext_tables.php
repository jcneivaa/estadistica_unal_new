<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.EstadisticaUnalNew',
            'Listcategorias',
            'Categorías 2.0'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.EstadisticaUnalNew',
            'Showprotocolo',
            'Protocolo 2.0'
        );

        $_EXTKEY='estadistica_unal_new';
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

        //pi_flexform value for categorias
        $frontendpluginName = 'Listcategorias';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature]= 'select_key';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/categorias.xml');


        //pi_flexform value for protocolo
        $frontendpluginName = 'Showprotocolo';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/protocolo.xml');


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('estadistica_unal_new', 'Configuration/TypoScript', 'Estadistica Unal 2.0');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_categoria', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_categoria.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_categoria');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_atributo', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_atributo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_atributo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_tipoatributo', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_tipoatributo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_tipoatributo');

    }
);
