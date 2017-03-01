<?php

namespace spec\Bamiz\LcdNumbersKata;

use Bamiz\LcdNumbersKata\Digit;
use Bamiz\LcdNumbersKata\Renderer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RendererSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Renderer::class);
    }

    public function it_renders_a_longer_number_with_size_1()
    {
        $digits = $this->render('145', 1);
        $digits->shouldHaveCount(3);

        $digits[0]->getDigit()->shouldBe(1);
        $digits[1]->getDigit()->shouldBe(4);
        $digits[2]->getDigit()->shouldBe(5);
    }
}
