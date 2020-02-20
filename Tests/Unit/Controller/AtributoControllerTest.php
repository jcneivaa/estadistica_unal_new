<?php
namespace UNAL\EstadisticaUnalNew\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 * @author Alexis Ortiz ft. Camilo Neiva <jcneivaa@unal.edu.co >
 */
class AtributoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\EstadisticaUnalNew\Controller\AtributoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\EstadisticaUnalNew\Controller\AtributoController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAtributosFromRepositoryAndAssignsThemToView()
    {

        $allAtributos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $atributoRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $atributoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAtributos));
        $this->inject($this->subject, 'atributoRepository', $atributoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('atributos', $allAtributos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
