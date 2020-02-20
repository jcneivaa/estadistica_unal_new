<?php
namespace UNAL\EstadisticaUnalNew\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 * @author Alexis Ortiz ft. Camilo Neiva <jcneivaa@unal.edu.co >
 */
class AtributoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\EstadisticaUnalNew\Domain\Model\Atributo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\EstadisticaUnalNew\Domain\Model\Atributo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNombreReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombre()
        );
    }

    /**
     * @test
     */
    public function setNombreForStringSetsNombre()
    {
        $this->subject->setNombre('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescripcionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescripcion()
        );
    }

    /**
     * @test
     */
    public function setDescripcionForStringSetsDescripcion()
    {
        $this->subject->setDescripcion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'descripcion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTipoReturnsInitialValueForTipoAtributo()
    {
        self::assertEquals(
            null,
            $this->subject->getTipo()
        );
    }

    /**
     * @test
     */
    public function setTipoForTipoAtributoSetsTipo()
    {
        $tipoFixture = new \UNAL\EstadisticaUnalNew\Domain\Model\TipoAtributo();
        $this->subject->setTipo($tipoFixture);

        self::assertAttributeEquals(
            $tipoFixture,
            'tipo',
            $this->subject
        );
    }
}
