<?php

declare(strict_types = 1);

namespace Bamiz\LcdNumbersKata;

class Renderer
{
    /**
     * @param string $digits
     * @param int    $size
     */
    public function render(string $digits, int $size)
    {
        $rendered = [];

        for ($i = 0; $i < strlen($digits); $i++) {
            $digit = $digits[$i];
            $rendered[] = new Digit((int)$digit, $size);
        }

        return $rendered;
    }
}