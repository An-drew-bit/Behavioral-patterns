<?php

namespace interfaces;

interface IQStrategy
{
    public function pay(string $data) : string;
}