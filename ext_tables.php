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

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('estadistica_unal_new', 'Configuration/TypoScript', 'Estadistica Unal 2.0');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_categoria', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_categoria.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_categoria');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_atributo', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_atributo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_atributo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_estadisticaunalnew_domain_model_tipoatributo', 'EXT:estadistica_unal_new/Resources/Private/Language/locallang_csh_tx_estadisticaunalnew_domain_model_tipoatributo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_estadisticaunalnew_domain_model_tipoatributo');

    }
);
