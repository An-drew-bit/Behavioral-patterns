<?php

namespace classes;

use interfaces\{ISplObserver, ISplSubject};

class Experience implements ISplObserver
{
    public function update(ISplSubject $subject)
    {
        if ($subject->state == 4 || $subject->state >= 6) {
            echo "Experience: Reacted to the event.\n";
        }
    }
}