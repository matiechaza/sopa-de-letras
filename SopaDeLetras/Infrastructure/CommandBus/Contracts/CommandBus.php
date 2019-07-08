<?php

namespace SopaDeLetras\Infrastructure\CommandBus\Contracts;

use SopaDeLetras\Application\Handler;
use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;

interface CommandBus
{
    public function execute(Command $command);

    public function resolveHandler(Command $command): Handler;
}
