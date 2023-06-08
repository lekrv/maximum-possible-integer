<?php

namespace Tests\Unit\app\UseCases;

use App\Exceptions\NumberValueCalculationException;
use App\UseCases\MaximumPossibleIntegerUseCase;
use JetBrains\PhpStorm\NoReturn;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Scenarios\MaximumPossibleIntegerScenario;
use Throwable;

/**
 * @author  Leyniker Rivera V. <ing.leyniker.rivera@gmail.com>
 */
class MaximumPossibleIntegerUseCaseTest extends TestCase
{
    private MaximumPossibleIntegerUseCase $useCase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->useCase = new MaximumPossibleIntegerUseCase();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->useCase);
    }

    /**
     * @throws NumberValueCalculationException
     * @dataProvider scenarioProvider()
     */
    #[NoReturn]
    public function testSuccess(
        int $numberX,
        int $numberY,
        int $numberN,
        int $resultSuccess
    ): void {
        $result = $this->useCase
            ->findMaximumValue(
                numberX: $numberX,
                numberY: $numberY,
                numberN: $numberN
            );

        $this->assertEquals($resultSuccess, $result);
    }

    /**
     * @throws NumberValueCalculationException
     */
    #[NoReturn]
    public function testNotExistResultValues(): void
    {
        $this->expectException(Throwable::class);
        $this->expectExceptionMessage('No values were found');

        $this->useCase->findMaximumValue(
            numberX: 12,
            numberY: 10_000,
            numberN: -1
        );
    }

    /**
     * @throws NumberValueCalculationException
     */
    #[NoReturn]
    public function testErrorByDifferenceTypeArguments(): void
    {
        $this->expectException(Throwable::class);

        $this->useCase->findMaximumValue(
            numberX: 'Example',
            numberY: 1,
            numberN: 2
        );
    }

    public static function scenarioProvider(): array
    {
        $scenarioData = new MaximumPossibleIntegerScenario();

        return $scenarioData->scenariosDataProvider();
    }
}
