<?php

namespace SopaDeLetras\Domain\DataTransfers\Tablero;

class TableroDto
{
    protected $tablero;

    public function getGrilla(): array
    {
        return $this->tablero;
    }
}
