<?php

namespace classes;

use interfaces\ICommand;
use classes\Receiver;

class ComplexCommand implements ICommand
{
    protected $receiver;
    protected $a;
    protected $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute() : void
    {

        echo "ComplexCommand: Complex stuff should be done by a receiver object.\n";

        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}