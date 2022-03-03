<?php

use classes\{Email, Experience, Name, Subject};

$subject = new Subject();

$ob1 = new Name();
$subject->attach($ob1);

$ob2 = new Email();
$subject->attach($ob2);

$ob3 = new Experience();
$subject->attach($ob3);

$subject->logic();
$subject->logic();
$subject->logic();

$subject->detach($ob3);
$subject->logic();