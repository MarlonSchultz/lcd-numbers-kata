<?php

namespace spec\Bamiz\LcdNumbersKata;

use Bamiz\LcdNumbersKata\Display;
use PhpSpec\ObjectBehavior;

class DisplaySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Display::class);
    }
}
