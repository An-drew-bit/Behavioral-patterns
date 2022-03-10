<?php

namespace classes;

use interfaces\ICommand;

class SimpleCommand implements ICommand
{
    private $payload;

    public function __construct(string $payload)
    {

        $this->payload = $payload;
    }

    public function execute() : void
    {

        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")\n";
    }
}