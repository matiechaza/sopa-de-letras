<?php

namespace Tests\Unit;

use SopaDeLetras\Application\Exceptions\HendlerNotFoundException;
use SopaDeLetras\Infrastructure\CommandBus\SimpleCommandBus;
use Tests\TestCase;
use Tests\Unit\Mocks\UnCommand;

final class CommandTest extends TestCase
{
    public function testVerificarExceptionCuandoNoExisteHandlerParaUnCommand(): void
    {
        $this->expectException(HendlerNotFoundException::class);
        $this->expectExceptionMessage('No se encontro Handler para el comando solicitado.');

        $commandBus = new SimpleCommandBus();

        $commandBus->resolveHandler(new UnCommand());
    }
}
