<?php

namespace SopaDeLetras\Domain\DataTransfers\Tablero;

final class TableroDosDto extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [
            ['E', 'I', 'O', 'I', 'E', 'I', 'O', 'E', 'I', 'O']
        ];
    }
}
