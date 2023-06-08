<?php

namespace App\UseCases;

use App\Exceptions\NumberValueCalculationException;

/**
 * This class find the maximum possible integer from 0 to n with the following condition:
 *
 * - Find the maximum integer k  such that 0 ≤ k ≤ n that k % x = y
 *
 * @author  Leyniker Rivera V. <ing.leyniker.rivera@gmail.com>
 */
final class MaximumPossibleIntegerUseCase
{
    /**
     * @throws NumberValueCalculationException
     */
    public function findMaximumValue(int $numberX, int $numberY, $numberN): int
    {
        for ($numberK = $numberN; $numberK >= 0; $numberK --) {
            if ($numberK % $numberX === $numberY) {
                return $numberK;
            }
        }

        throw new NumberValueCalculationException('No values were found');
    }
}
