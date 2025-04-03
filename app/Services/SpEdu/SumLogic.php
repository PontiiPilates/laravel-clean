<?php

namespace App\Services\SpEdu;

class SumLogic
{
    private $mnozhitel;

    public function __construct(int $c) 
    {
        $this->mnozhitel = $c;
    }

    public function handle()
    {
        $a = 10;
        $b = 15;

        return intval($a + $b * $this->mnozhitel);
    }
}
