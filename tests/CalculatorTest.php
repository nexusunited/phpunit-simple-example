<?php declare(strict_types=1);

namespace AppTest;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        self::assertSame(25, $calculator->add([5, 20]));
    }

    public function testExceptionWhenParamsLessValueOne()
    {
        $calculator = new Calculator();

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('operand must be greater than zero');

        $calculator->add([0]);
    }
}
