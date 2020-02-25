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
        $categorias = $this->categoriaRepository->findAll();
        $this->view->assign('categorias', $categorias);
    }
}
