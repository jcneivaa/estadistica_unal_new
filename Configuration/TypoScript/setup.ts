
plugin.tx_estadisticaunalnew_estadisticaspreview {
    view {
        templateRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_estadisticaunalnew_estadisticaspreview.view.templateRootPath}
        partialRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_estadisticaunalnew_estadisticaspreview.view.partialRootPath}
        layoutRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_estadisticaunalnew_estadisticaspreview.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_estadisticaunalnew_estadisticaspreview.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_estadisticaunalnew_listcategorias {
    view {
        templateRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.templateRootPath}
        partialRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.partialRootPath}
        layoutRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_estadisticaunalnew_listcategorias.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_estadisticaunalnew_showprotocolo {
    view {
        templateRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_estadisticaunalnew_showprotocolo.view.templateRootPath}
        partialRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_estadisticaunalnew_showprotocolo.view.partialRootPath}
        layoutRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_estadisticaunalnew_showprotocolo.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_estadisticaunalnew_showprotocolo.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_estadisticaunalnew._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-estadistica-unal-new table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-estadistica-unal-new table th {
        font-weight:bold;
    }

    .tx-estadistica-unal-new table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
