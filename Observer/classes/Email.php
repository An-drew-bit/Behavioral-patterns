<?php

namespace classes;

use interfaces\{ISplObserver, ISplSubject};

class Email implements ISplObserver
{
    public function update(ISplSubject $subject)
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "Email: Reacted to the event.\n";
        }
    }
}