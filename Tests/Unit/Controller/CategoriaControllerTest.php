<?php
namespace UNAL\EstadisticaUnalNew\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 * @author Alexis Ortiz ft. Camilo Neiva <jcneivaa@unal.edu.co >
 */
class CategoriaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\EstadisticaUnalNew\Controller\CategoriaController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\EstadisticaUnalNew\Controller\CategoriaController::class)
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
    public function listActionFetchesAllCategoriasFromRepositoryAndAssignsThemToView()
    {

        $allCategorias = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $categoriaRepository = $this->getMockBuilder(\UNAL\EstadisticaUnalNew\Domain\Repository\CategoriaRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $categoriaRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCategorias));
        $this->inject($this->subject, 'categoriaRepository', $categoriaRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('categorias', $allCategorias);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
