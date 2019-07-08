<?php


namespace Tests\Unit\Stubs;


use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;

class TableroSinTercerLetraDtoStub extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['X', 'X', 'X', 'X', 'X'],
            ['X', 'I', 'I', 'I', 'X'],
            ['X', 'I', 'O', 'I', 'X'],
            ['X', 'I', 'I', 'I', 'X'],
            ['X', 'X', 'X', 'X', 'X']
        ];
    }
}
