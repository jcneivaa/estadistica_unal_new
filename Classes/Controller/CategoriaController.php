<?php
namespace UNAL\EstadisticaUnalNew\Controller;

/***
 *
 * This file is part of the "Estadistica Unal 2.0" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Alexis Ortiz <eaortiz@unal.edu.co>, Unal
 *           Alexis Ortiz ft. Camilo Neiva <jcneivaa@unal.edu.co >, Unal
 *
 ***/

/**
 * CategoriaController
 */
class CategoriaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * categoriaRepository
     *
     * @var \UNAL\EstadisticaUnalNew\Domain\Repository\CategoriaRepository
     * @inject
     */
    protected $categoriaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {

        $uri_pagina_protocolo = $this->settings['link_pagina_protocolo'];
        $exploded_uri_pagina_protocolo = explode('=', $uri_pagina_protocolo);
        $pagina_protocolo_pageuid = $exploded_uri_pagina_protocolo[1];


        $categorias = $this->categoriaRepository->findAll();

        $this->view->assignMultiple([
            'pagina_protocolo_pageuid' => $pagina_protocolo_pageuid,
            'categorias' => $categorias
        ]);
    }

    /**
     * action listProtocolo
     *
     * @return void
     */
    public function listProtocoloAction()
    {
       

        $texto = $this->settings['texto_protocolos'];
        $categorias = $this->categoriaRepository->findAll();
        $this->view->assignMultiple([
            'texto' => $texto,
            'categorias' => $categorias
        ]);
    }
    
    /**
     * action showProtocolo
     *
     * @return void
     */
    public function showProtocoloAction()
    {
       
        $uid = $this->request->getArgument('categoria');
        $categoria = $this->categoriaRepository->findByUid($uid);
        $this->view->assign('categoria', $categoria);
    }

}
