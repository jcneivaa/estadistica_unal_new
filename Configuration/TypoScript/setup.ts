
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
        estadisticas-protocolo-new = EXT:estadistica_unal_new/Resources/Public/Css/estadisticas-protocolo-new.scss
        jssocials-theme-flat = EXT:estadistica_unal_new/Resources/Public/Css/jssocials-theme-flat.css
        jssocials = EXT:estadistica_unal_new/Resources/Public/Css/jssocials.css
        font-awesome = EXT:estadistica_unal_new/Resources/Public/Css/font-awesome.css


        
    }

    includeJS{
        jsprintf = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/libs/sprintf.js
        jspdf = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/jspdf.js
        jspdf_debug = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/jspdf.debug.js
        jspdf_addimage = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/jspdf.plugin.addimage.js
        base64 = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/libs/base64.js
        jspdf_autotable = EXT:estadistica_unal_new/Resources/Public/Js/libs/jspdf/jspdf.plugin.autotable.js
        fullscreen-helper = EXT:estadistica_unal_new/Resources/Public/Js/libs/full-screen-helper.js
        jssocials = EXT:estadistica_unal_new/Resources/Public/Js/libs/jssocials.min.js

    }

    includeJSFooter{

        list-categorias-new = EXT:estadistica_unal_new/Resources/Public/Js/list-categorias-new.js 
        protocolo-new = EXT:estadistica_unal_new/Resources/Public/Js/protocolo-new.js 

    }

}
