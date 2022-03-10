<?php

use classes\{Receiver, Invoker, SimpleCommand, ComplexCommand};

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));

$receiver = new Receiver();

$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();