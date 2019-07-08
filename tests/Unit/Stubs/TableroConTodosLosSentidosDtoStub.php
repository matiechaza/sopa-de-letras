<?php

namespace Tests\Unit\Stubs;


use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;

final class TableroConTodosLosSentidosDtoStub extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['E', 'X', 'E', 'X', 'E'],
            ['X', 'I', 'I', 'I', 'X'],
            ['E', 'I', 'O', 'I', 'E'],
            ['X', 'I', 'I', 'I', 'X'],
            ['E', 'X', 'E', 'X', 'E']
        ];
    }
}
