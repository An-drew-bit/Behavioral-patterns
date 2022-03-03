<?php

namespace classes;

use interfaces\{IQStrategy, IWStrategy, IYStrategy};

class Checkout
{
    protected $qStrategy;
    protected $yStrategy;
    protected $wStrategy;

    public function __construct(IQStrategy $qStrategy, IYStrategy $yStrategy, IWStrategy $wStrategy)
    {
        $this->qStrategy = $qStrategy;
        $this->yStrategy = $yStrategy;
        $this->wStrategy = $wStrategy;
    }
}