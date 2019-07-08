<?php

namespace Tests\Unit;

use SopaDeLetras\Domain\Services\SopaDeLetras;
use Tests\TestCase;
use Tests\Unit\Stubs\EmptyTableroDtoStub;
use Tests\Unit\Stubs\TableroConTodosLosSentidosDtoStub;
use Tests\Unit\Stubs\TableroSinSegundaLetraDtoStub;
use Tests\Unit\Stubs\TableroSinTercerLetraDtoStub;

final class SopaDeLetrasTest extends TestCase
{

    public function testVerificarPalabraEnTodosLosSentidos(): void
    {
        $sopaDeLetrasUno = new SopaDeLetras(new TableroConTodosLosSentidosDtoStub());

        $sopaDeLetrasUno->play();

        $this->assertEquals(8, $sopaDeLetrasUno->getContador());
    }

    public function testVerificarNoContarSiFaltaLaSegundaLetra(): void
    {
        $sopaDeLetrasUno = new SopaDeLetras(new TableroSinSegundaLetraDtoStub());

        $sopaDeLetrasUno->play();

        $this->assertEquals(0, $sopaDeLetrasUno->getContador());
    }

    public function testVerificarNoContarSiFaltaLaTercerLetra(): void
    {
        $sopaDeLetrasUno = new SopaDeLetras(new TableroSinTercerLetraDtoStub());

        $sopaDeLetrasUno->play();

        $this->assertEquals(0, $sopaDeLetrasUno->getContador());
    }

    public function testVerificarTableroVacioDevuelvaCero(): void
    {
        $sopaDeLetrasUno = new SopaDeLetras(new EmptyTableroDtoStub());

        $sopaDeLetrasUno->play();

        $this->assertEquals(0, $sopaDeLetrasUno->getContador());
    }
}
