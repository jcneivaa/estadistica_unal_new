<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadisticaunalnew_domain_model_tipoatributo',
        'label' => 'nombre',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'nombre,nombre_display',
        'iconfile' => 'EXT:estadistica_unal_new/Resources/Public/Icons/tx_estadisticaunalnew_domain_model_tipoatributo.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, nombre, nombre_display',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, nombre, nombre_display'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_estadisticaunalnew_domain_model_tipoatributo',
                'foreign_table_where' => 'AND tx_estadisticaunalnew_domain_model_tipoatributo.pid=###CURRENT_PID### AND tx_estadisticaunalnew_domain_model_tipoatributo.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

        'nombre' => [
            'exclude' => false,
            'label' => 'LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadisticaunalnew_domain_model_tipoatributo.nombre',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'nombre_display' => [
            'exclude' => false,
            'label' => 'LLL:EXT:estadistica_unal_new/Resources/Private/Language/locallang_db.xlf:tx_estadisticaunalnew_domain_model_tipoatributo.nombre_display',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
    
    ],
];
