<?php


namespace Tests\Unit\Mocks;


use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;

class UnCommand implements Command
{
    public function getData(): string
    {
        return '3x3';
    }
}
