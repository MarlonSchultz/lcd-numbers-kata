<?php

namespace Bamiz\LcdNumbersKata;

class Display
{
    /**
     * @var Renderer
     */
    private $renderer;


    private $printer;

    /**
     * @param Renderer $renderer
     * @param Printer  $printer
     */
    public function __construct(Renderer $renderer, Printer $printer)
    {
        $this->renderer = $renderer;
        $this->printer = $printer;
    }

    public function display($digits, $size)
    {
        $renderedDigits = $this->renderer->render($digits, $size);
        $this->printer->printDigits($renderedDigits, $size);
    }
}
