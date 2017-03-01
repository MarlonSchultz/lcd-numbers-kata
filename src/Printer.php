<?php

namespace Bamiz\LcdNumbersKata;

class Printer
{
    /**
     * @param Digit[] $digits
     */
    public function printDigits($digits)
    {
        foreach ($digits as $digit) {
            $rows = $digit->getRows();
            foreach ($rows as $row) {
                echo $row."\n";
            }
            echo "\n";
        }
    }
}