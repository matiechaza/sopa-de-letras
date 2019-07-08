<?php


namespace Tests\Unit\Stubs;


use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;

class TableroSinSegundaLetraDtoStub extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['E', 'X', 'E', 'X', 'E'],
            ['X', 'X', 'X', 'X', 'X'],
            ['E', 'X', 'O', 'X', 'E'],
            ['X', 'X', 'X', 'X', 'X'],
            ['E', 'X', 'E', 'X', 'E']
        ];
    }
}
