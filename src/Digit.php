<?php

declare(strict_types=1);

namespace Bamiz\LcdNumbersKata;

class Digit
{
    private $rows = [];

    private $size;

    private $digit;

    public function __construct(int $digit, int $size)
    {
        $this->size = $size;
        $this->digit = $digit;

        $this->initializeRows($digit, $size);
    }

    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param $size
     */
    private function initializeRows($digit, $size)
    {
        // top row
        $this->rows[] = $this->getTopRow($digit);

        // first side segments
        for ($i = 0; $i < $size; $i++) {
            $this->rows[] = $this->getFirstSideSegments($digit);
        }

        // middle row
        $this->rows[] = $this->getMiddleRow($digit);

        // second side segments
        for ($i = 0; $i < $size; $i++) {
            $this->rows[] = $this->getSecondSideSegments($digit);
        }

        // bottom row
        $this->rows[] = $this->getBottomRow($digit);
    }

    private function getTopRow($digit)
    {
        switch ($digit) {
            case 0:
            case 2:
            case 3:
            case 5:
            case 6:
                return ' - ';
            case 1:
            case 4:
                return '   ';

        }
    }

    private function getFirstSideSegments($digit)
    {
        switch ($digit) {
            case 0:
            case 4:
                return '| |';
            case 1:
            case 2:
            case 3:
                return '  |';
            case 5:
            case 6:
                return '|  ';

        }


    }

    private function getMiddleRow($digit)
    {
        switch ($digit) {
            case 0:
            case 1:
                return '   ';
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                return ' - ';

        }
    }


    private function getSecondSideSegments($digit)
    {
        switch ($digit) {
            case 0:
            case 6:
                return '| |';
            case 1:
            case 3:
            case 4:
            case 5:
                return '  |';
            case 2:
                return '|  ';

        }
    }

    private function getBottomRow($digit)
    {
        switch ($digit) {
            case 0:
            case 2:
            case 3:
            case 5:
            case 6:
                return ' - ';
            case 1:
            case 4:
                return '   ';

        }
    }

    /**
     * @return mixed
     */
    public function getDigit()
    {
        return $this->digit;
    }
}