<?php

namespace classes;

use interfaces\IQStrategy;

class Qiwi implements IQStrategy
{
    public function pay(string $data) : string
    {
        return "Платеж успешно совершен";
    }
}