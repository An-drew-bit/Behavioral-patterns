<?php

namespace classes;

use interfaces\ICommand;

class Invoker
{
    protected $onStart;
    protected $onFinish;

    public function setOnStart(ICommand $command) : void
    {

        $this->onStart = $command;
    }

    public function setOnFinish(ICommand $command) : void
    {

        $this->onFinish = $command;
    }

    public function doSomethingImportant() : void
    {

        echo "Invoker: Does anybody want something done before I begin?\n";

        if ($this->onStart instanceof ICommand) {
            $this->onStart->execute();
        }

        echo "Invoker: ...doing something really important...\n";

        echo "Invoker: Does anybody want something done after I finish?\n";

        if ($this->onFinish instanceof ICommand) {
            $this->onFinish->execute();
        }
    }
}