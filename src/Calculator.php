<?php declare(strict_types=1);

namespace App;

class Calculator
{
    public function add(array $operands): int
    {
        foreach ($operands as $operand) {
            if($operand < 1) {
                throw new \RuntimeException('operand must be greater than zero');
            }
        }
        return array_sum($operands);
    }
}
