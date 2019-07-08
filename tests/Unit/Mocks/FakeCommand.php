<?php


namespace Tests\Unit\Mocks;


use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;

class FakeCommand implements Command
{
    public function getData(): string
    {
        return 'fake';
    }
}
