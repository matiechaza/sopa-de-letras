<?php

use SopaDeLetras\Domain\DataTransfers\Tablero\TableroCuatroDto;
use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDosDto;
use SopaDeLetras\Domain\DataTransfers\Tablero\TableroTresDto;
use SopaDeLetras\Domain\DataTransfers\Tablero\TableroUnoDto;

return [
    '3x3' => new TableroUnoDto(),
    '1x10' => new TableroDosDto(),
    '5x5' => new TableroTresDto(),
    '7x2' => new TableroCuatroDto(),
];
