<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Troco;

class TrocoTest extends TestCase
{
    public function testQtdeNotasRetornaOArray()
    {
        $troco = new Troco();
        $expected = [
            "100" => 2,
            "50" => 1,
            "20" => 1,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 1,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $troco->getQtdeNotas(270.5));
    }
}