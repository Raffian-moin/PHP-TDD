<?php

declare(strict_types=1);

namespace App\Calculator;

use App\Calculator\Interface\OperationInterface;
use Exception;

class Addition implements OperationInterface
{
    private $numbers = [];

    public function setNumbers(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function calculate()
    {
        if (count($this->numbers) === 0) {
            throw new Exception();
        }

        return array_sum($this->numbers);
    }
}
