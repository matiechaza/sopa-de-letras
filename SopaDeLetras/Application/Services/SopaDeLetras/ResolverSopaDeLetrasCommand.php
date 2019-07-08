<?php

namespace SopaDeLetras\Application\Services\SopaDeLetras;

use SopaDeLetras\Application\Services\SopaDeLetras\Contracts\Command;

final class ResolverSopaDeLetrasCommand implements Command
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
