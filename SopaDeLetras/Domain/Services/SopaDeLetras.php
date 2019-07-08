<?php

namespace SopaDeLetras\Domain\Services;

use SopaDeLetras\Domain\DataTransfers\Tablero\TableroDto;

final class SopaDeLetras
{
    private const PRIMERO_LETRA_BUSCADA = 'O';
    private const SEGUNDA_LETRA_BUSCADA = 'I';
    private const TERCERA_LETRA_BUSCADA = 'E';

    private $tablero;
    private $contador;

    public function __construct(TableroDto $tablero)
    {
        $this->tablero = $tablero->getGrilla();
    }

    public function play(): SopaDeLetras
    {
        $this->resetContador();

        $cantFilas = count($this->tablero);
        for ($fila = 0; $fila < $cantFilas; $fila++) {

            $cantColumnas = count($this->tablero[$fila]);
            for ($columna = 0; $columna < $cantColumnas; $columna++) {

                if ($this->tablero[$fila][$columna] !== self::PRIMERO_LETRA_BUSCADA) {
                    continue;
                }

                $this->verificarVertical($fila, $columna);
                $this->verificarHorizontal($fila, $columna);
                $this->verificarDiagonalDerecha($fila, $columna);
                $this->verificarDiagonalIzquierda($fila, $columna);
            }
        }

        return $this;
    }

    public function getContador(): int
    {
        return (int)$this->contador;
    }

    private function resetContador(): void
    {
        $this->contador = 0;
    }

    private function verificarVertical(int $i, int $j): void
    {
        if ($this->verificarDireccion($i + 1, $j, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i + 2, $j, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }

        if ($this->verificarDireccion($i - 1, $j, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i - 2, $j, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }
    }

    private function verificarHorizontal(int $i, int $j): void
    {
        if ($this->verificarDireccion($i, $j + 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i, $j + 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }

        if ($this->verificarDireccion($i, $j - 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i, $j - 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }
    }

    private function verificarDiagonalDerecha(int $i, int $j): void
    {
        if ($this->verificarDireccion($i + 1, $j + 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i + 2, $j + 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }

        if ($this->verificarDireccion($i - 1, $j - 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i - 2, $j - 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }
    }

    private function verificarDiagonalIzquierda(int $i, int $j): void
    {
        if ($this->verificarDireccion($i + 1, $j - 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i + 2, $j - 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }

        if ($this->verificarDireccion($i - 1, $j + 1, self::SEGUNDA_LETRA_BUSCADA) && $this->verificarDireccion($i - 2, $j + 2, self::TERCERA_LETRA_BUSCADA)) {
            $this->contador++;
        }
    }

    private function verificarDireccion($fila, $columna, $letra): bool
    {
        return isset($this->tablero[$fila][$columna]) && $this->tablero[$fila][$columna] === $letra;
    }
}
