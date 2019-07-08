<?php

namespace SopaDeLetras\Infrastructure\CommandBus;

use SopaDeLetras\Application\Handler;
use SopaDeLetras\Infrastructure\CommandBus\Contracts\CommandBus;
use SopaDeLetras\Application\Exceptions\HendlerNotFoundException;
use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;

final class SimpleCommandBus implements CommandBus
{
    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'Handler';

    public function execute(Command $command): int
    {
        return $this->resolveHandler($command)->__invoke($command);
    }

    public function resolveHandler(Command $command): Handler
    {
        $handler = $this->getHandlerClass($command);

        if (!class_exists($handler)) {
            throw new HendlerNotFoundException('No se encontro Handler para el comando solicitado.');
        }

        return new $handler();
    }

    private function getHandlerClass(Command $command): string
    {
        return str_replace(self::COMMAND_PREFIX, self::HANDLER_PREFIX, get_class($command));
    }
}
