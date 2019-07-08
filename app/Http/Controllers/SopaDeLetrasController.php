<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResolverSopaDeLetrasRequest;
use Psy\Command\Command;
use SopaDeLetras\Application\Services\SopaDeLetras\ResolverSopaDeLetrasCommand;
use SopaDeLetras\Infrastructure\CommandBus\Contracts\CommandBus;
use Illuminate\Http\JsonResponse;


final class SopaDeLetrasController extends Controller
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke(ResolverSopaDeLetrasRequest $request) : JsonResponse
    {
        $command = $this->makeCommand($request->input('tablero'));

        try {
            $palabraEncontrada = $this->commandBus->execute($command);
            return response()->json(['result' => $palabraEncontrada]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    private function makeCommand(string $tablero) : ResolverSopaDeLetrasCommand
    {
        $tableros = config('sopadeletras');

        return new ResolverSopaDeLetrasCommand(
            $tableros[$tablero]
        );
    }
}
