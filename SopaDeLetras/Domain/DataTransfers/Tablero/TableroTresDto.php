<?php

namespace SopaDeLetras\Domain\DataTransfers\Tablero;

final class TableroTresDto extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['E', 'A', 'E', 'A', 'E'],
            ['A', 'I', 'I', 'I', 'A'],
            ['E', 'I', 'O', 'I', 'E'],
            ['A', 'I', 'I', 'I', 'A'],
            ['E', 'A', 'E', 'A', 'E']
        ];
    }
}
