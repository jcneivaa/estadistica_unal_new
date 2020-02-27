
plugin.tx_estadisticaunalnew_listcategorias {
    view {
        templateRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.templateRootPath}
        partialRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.partialRootPath}
        layoutRootPaths.0 = EXT:estadistica_unal_new/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_estadisticaunalnew_listcategorias.view.layoutRootPath}
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
//Borrar el persistence que crea automatico typo3
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
page{
    includeCSS {

        list-categorias-new = EXT:estadistica_unal_new/Resources/Public/Css/list-categorias-new.scss
        modal-categoria = EXT:estadistica_unal_new/Resources/Public/Css/modal-categoria.scss


    }

    includeJS{
        list-categorias-new = EXT:estadistica_unal_new/Resources/Public/Js/list-categorias-new.js 
    }

}
