<?php

namespace SopaDeLetras\Domain\DataTransfers\Tablero;


final class TableroCuatroDto extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['O', 'X'],
            ['I', 'O'],
            ['E', 'X'],
            ['I', 'I'],
            ['O', 'X'],
            ['I', 'E'],
            ['E', 'X']
        ];
    }
}
