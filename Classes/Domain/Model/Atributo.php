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
 * Atributo
 */
class Atributo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nombre = '';

    /**
     * descripcion
     * 
     * @var string
     */
    protected $descripcion = '';

    /**
     * tipo
     * 
     * @var \UNAL\EstadisticaUnalNew\Domain\Model\TipoAtributo
     */
    protected $tipo = null;

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
     * Returns the tipo
     * 
     * @return \UNAL\EstadisticaUnalNew\Domain\Model\TipoAtributo $tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Sets the tipo
     * 
     * @param \UNAL\EstadisticaUnalNew\Domain\Model\TipoAtributo $tipo
     * @return void
     */
    public function setTipo(\UNAL\EstadisticaUnalNew\Domain\Model\TipoAtributo $tipo)
    {
        $this->tipo = $tipo;
    }
}
