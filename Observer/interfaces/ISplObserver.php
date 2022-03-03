<?php

namespace interfaces;

interface ISplObserver
{
    public function update(ISplSubject $subject);
}