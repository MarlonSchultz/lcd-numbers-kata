<?php

namespace spec\Bamiz\LcdNumbersKata;

use Bamiz\LcdNumbersKata\Digit;
use Bamiz\LcdNumbersKata\Display;
use Bamiz\LcdNumbersKata\Printer;
use Bamiz\LcdNumbersKata\Renderer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DisplaySpec extends ObjectBehavior
{
    public function let(Renderer $renderer, Printer $printer)
    {
        $this->beConstructedWith($renderer, $printer);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Display::class);
    }

    public function it_uses_a_renderer_to_render_the_digits(Renderer $renderer)
    {
        $digits = '123';
        $size = 2;
        $renderer->render($digits, $size)->shouldBeCalled();

        $this->display($digits, $size);
    }

    public function it_passes_digits_to_the_printer(
        Renderer $renderer,
        Printer $printer,
        Digit $digit1,
        Digit $digit2,
        Digit $digit3
    )
    {
        $digits = [$digit1, $digit2, $digit3];

        $renderer->render('123', 2)->willReturn($digits);
        $printer->printDigits($digits, 2)->shouldBeCalled();

        $this->display('123', 2);
    }
}
