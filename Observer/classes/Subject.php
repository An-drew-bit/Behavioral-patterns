<?php

namespace classes;

use interfaces\ISplObserver;
use interfaces\ISplSubject;
use SplObjectStorage;

class Subject implements ISplSubject
{
    public $state;
    protected $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(ISplObserver $observer)
    {
        echo "Subject: Attached an observer.\n";

        $this->observers->attach($observer);
    }

    public function detach(ISplObserver $observer)
    {
        $this->observers->detach($observer);

        echo "Subject: Detached an observer.\n";
    }

    public function notify()
    {
        echo "Subject: Notifying observers...\n";

        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function logic()
    {
        echo "\nSubject: I'm doing something important.\n";

        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}\n";

        $this->notify();
    }
}