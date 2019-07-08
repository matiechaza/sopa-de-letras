<?php

namespace SopaDeLetras\Domain\DataTransfers\Tablero;

final class TableroUnoDto extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['O', 'I', 'E'],
            ['I', 'I', 'X'],
            ['E', 'X', 'E']
        ];
    }
}
