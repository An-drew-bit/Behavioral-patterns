<?php

namespace interfaces;

interface ISplSubject
{
    public function attach(ISplObserver $observer);
    public function detach(ISplObserver $observer);
    public function notify();
}