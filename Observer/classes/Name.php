<?php

namespace classes;

use interfaces\{ISplObserver, ISplSubject};

class Name implements ISplObserver
{
    public function update(ISplSubject $subject)
    {
        if ($subject->state < 3) {
            echo "Name: Reacted to the event.\n";
        }
    }
}