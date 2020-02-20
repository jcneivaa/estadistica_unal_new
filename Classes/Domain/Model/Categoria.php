<?php
namespace UNAL\EstadisticaUnalNew\Domain\Model;

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
 * Categoria
 */
class Categoria extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nombre = '';

    /**
     * nombreDisplay
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nombreDisplay = '';

    /**
     * badge
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $badge = null;

    /**
     * altBadge
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $altBadge = null;

    /**
     * descripcion
     * 
     * @var string
     */
    protected $descripcion = '';

    /**
     * link
     * 
     * @var string
     */
    protected $link = '';

    /**
     * atributos
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\EstadisticaUnalNew\Domain\Model\Atributo>
     * @lazy
     */
    protected $atributos = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->atributos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the nombre
     * 
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the nombre
     * 
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Returns the nombreDisplay
     * 
     * @return string $nombreDisplay
     */
    public function getNombreDisplay()
    {
        return $this->nombreDisplay;
    }

    /**
     * Sets the nombreDisplay
     * 
     * @param string $nombreDisplay
     * @return void
     */
    public function setNombreDisplay($nombreDisplay)
    {
        $this->nombreDisplay = $nombreDisplay;
    }

    /**
     * Returns the badge
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $badge
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Sets the badge
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $badge
     * @return void
     */
    public function setBadge(\TYPO3\CMS\Extbase\Domain\Model\FileReference $badge)
    {
        $this->badge = $badge;
    }

    /**
     * Returns the altBadge
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $altBadge
     */
    public function getAltBadge()
    {
        return $this->altBadge;
    }

    /**
     * Sets the altBadge
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $altBadge
     * @return void
     */
    public function setAltBadge(\TYPO3\CMS\Extbase\Domain\Model\FileReference $altBadge)
    {
        $this->altBadge = $altBadge;
    }

    /**
     * Returns the descripcion
     * 
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Sets the descripcion
     * 
     * @param string $descripcion
     * @return void
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Returns the link
     * 
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     * 
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Adds a Atributo
     * 
     * @param \UNAL\EstadisticaUnalNew\Domain\Model\Atributo $atributo
     * @return void
     */
    public function addAtributo(\UNAL\EstadisticaUnalNew\Domain\Model\Atributo $atributo)
    {
        $this->atributos->attach($atributo);
    }

    /**
     * Removes a Atributo
     * 
     * @param \UNAL\EstadisticaUnalNew\Domain\Model\Atributo $atributoToRemove The Atributo to be removed
     * @return void
     */
    public function removeAtributo(\UNAL\EstadisticaUnalNew\Domain\Model\Atributo $atributoToRemove)
    {
        $this->atributos->detach($atributoToRemove);
    }

    /**
     * Returns the atributos
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\EstadisticaUnalNew\Domain\Model\Atributo> $atributos
     */
    public function getAtributos()
    {
        return $this->atributos;
    }

    /**
     * Sets the atributos
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\EstadisticaUnalNew\Domain\Model\Atributo> $atributos
     * @return void
     */
    public function setAtributos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $atributos)
    {
        $this->atributos = $atributos;
    }
}
