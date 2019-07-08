<?php

namespace SopaDeLetras\Application\Services\SopaDeLetras;

use SopaDeLetras\Application\Exceptions\TableroNoValidoException;
use SopaDeLetras\Application\Handler;
use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;
use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;
use SopaDeLetras\Domain\Services\SopaDeLetras;

final class ResolverSopaDeLetrasHandler implements Handler
{
    public function __invoke(Command $command): int
    {
        $tablero = $this->guard($command);

        $sopaDeLetras = new SopaDeLetras($tablero);

        return $sopaDeLetras->play()->getContador();
    }

    private function guard(Command $command): TableroDto
    {
        $tablero = $command->getData();

        if (!$tablero instanceof TableroDto) {
            throw new TableroNoValidoException('El Tablero seleccionado no es valido.');
        }

        return $tablero;
    }
}
