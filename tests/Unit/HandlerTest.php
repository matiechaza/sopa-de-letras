<?php

namespace Tests\Unit;

use SopaDeLetras\Application\Exceptions\TableroNoValidoException;
use SopaDeLetras\Application\Services\SopaDeLetras\ResolverSopaDeLetrasHandler;
use Tests\TestCase;
use Tests\Unit\Mocks\FakeCommand;

final class HandlerTest extends TestCase
{

    public function testVerificarExceptionCuandoNoSeObtieneUnTableroValido(): void
    {
        $fakeComand = new FakeCommand();
        $handler = new ResolverSopaDeLetrasHandler();

        $this->expectException(TableroNoValidoException::class);
        $this->expectExceptionMessage('El Tablero seleccionado no es valido.');

        $handler->__invoke($fakeComand);
    }
}
