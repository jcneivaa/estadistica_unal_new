<?php
namespace UNAL\EstadisticaUnalNew\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 * @author Alexis Ortiz ft. Camilo Neiva <jcneivaa@unal.edu.co >
 */
class CategoriaTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\EstadisticaUnalNew\Domain\Model\Categoria
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\EstadisticaUnalNew\Domain\Model\Categoria();
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
    public function getNombreDisplayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombreDisplay()
        );
    }

    /**
     * @test
     */
    public function setNombreDisplayForStringSetsNombreDisplay()
    {
        $this->subject->setNombreDisplay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombreDisplay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBadgeReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getBadge()
        );
    }

    /**
     * @test
     */
    public function setBadgeForFileReferenceSetsBadge()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setBadge($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'badge',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAltBadgeReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getAltBadge()
        );
    }

    /**
     * @test
     */
    public function setAltBadgeForFileReferenceSetsAltBadge()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setAltBadge($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'altBadge',
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
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAtributosReturnsInitialValueForAtributo()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAtributos()
        );
    }

    /**
     * @test
     */
    public function setAtributosForObjectStorageContainingAtributoSetsAtributos()
    {
        $atributo = new \UNAL\EstadisticaUnalNew\Domain\Model\Atributo();
        $objectStorageHoldingExactlyOneAtributos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAtributos->attach($atributo);
        $this->subject->setAtributos($objectStorageHoldingExactlyOneAtributos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAtributos,
            'atributos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAtributoToObjectStorageHoldingAtributos()
    {
        $atributo = new \UNAL\EstadisticaUnalNew\Domain\Model\Atributo();
        $atributosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $atributosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($atributo));
        $this->inject($this->subject, 'atributos', $atributosObjectStorageMock);

        $this->subject->addAtributo($atributo);
    }

    /**
     * @test
     */
    public function removeAtributoFromObjectStorageHoldingAtributos()
    {
        $atributo = new \UNAL\EstadisticaUnalNew\Domain\Model\Atributo();
        $atributosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $atributosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($atributo));
        $this->inject($this->subject, 'atributos', $atributosObjectStorageMock);

        $this->subject->removeAtributo($atributo);
    }
}
