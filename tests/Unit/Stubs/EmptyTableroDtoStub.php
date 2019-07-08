<?php


namespace Tests\Unit\Stubs;


use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;

final class EmptyTableroDtoStub extends TableroDto
{
    public function __construct()
    {
        $this->tablero = [];
    }
}
