<?php

namespace Tests\Unit\Scenarios;

use JetBrains\PhpStorm\ArrayShape;

/**
 * @author  Leyniker Rivera V. <ing.leyniker.rivera@gmail.com>
 */
class MaximumPossibleIntegerScenario
{
    #[ArrayShape([
        'Scenario 1' => 'int[]',
        'Scenario 2' => 'int[]',
        'Scenario 3' => 'int[]',
        'Scenario 4' => 'int[]',
        'Scenario 5' => 'int[]',
        'Scenario 6' => 'int[]',
        'Scenario 7' => 'int[]',
    ])]
    public function scenariosDataProvider(): array
    {
        return [
            'Scenario 1' => [
                'numberX'       => 7,
                'numberY'       => 5,
                'numberN'       => 12_345,
                'successResult' => 12_339
            ],
            'Scenario 2' => [
                'numberX'       => 5,
                'numberY'       => 0,
                'numberN'       => 4,
                'successResult' => 0
            ],
            'Scenario 3' => [
                'numberX'       => 10,
                'numberY'       => 5,
                'numberN'       => 15,
                'successResult' => 15
            ],
            'Scenario 4' => [
                'numberX'       => 17,
                'numberY'       => 8,
                'numberN'       => 54_321,
                'successResult' => 54_306
            ],
            'Scenario 5' => [
                'numberX'       => 499_999_993,
                'numberY'       => 9,
                'numberN'       => 1_000_000_000,
                'successResult' => 999_999_995
            ],
            'Scenario 6' => [
                'numberX'       => 10,
                'numberY'       => 5,
                'numberN'       => 187,
                'successResult' => 185
            ],
            'Scenario 7' => [
                'numberX'       => 2,
                'numberY'       => 0,
                'numberN'       => 999_999_999,
                'successResult' => 999_999_998
            ]
        ];
    }
}
