<?php

namespace spec\Bamiz\LcdNumbersKata;

use Bamiz\LcdNumbersKata\Digit;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DigitSpec extends ObjectBehavior
{
    public function it_adjusts_the_number_of_rows_to_its_size()
    {
        $this->beConstructedWith(9, 2);
        $this->getRows()->shouldHaveCount(7);
    }

    public function it_adjusts_the_number_of_rows_to_its_size_2()
    {
        $this->beConstructedWith(9, 3);
        $this->getRows()->shouldHaveCount(9);
    }

    public function it_is_0_of_size_1()
    {
        $this->beConstructedWith(0, 1);
        $this->getRows()[0]->shouldBe(' - ');
        $this->getRows()[1]->shouldBe('| |');
        $this->getRows()[2]->shouldBe('   ');
        $this->getRows()[3]->shouldBe('| |');
        $this->getRows()[4]->shouldBe(' - ');
    }

    public function it_is_1_of_size_1()
    {
        $this->beConstructedWith(1, 1);
        $this->getRows()[0]->shouldBe('   ');
        $this->getRows()[1]->shouldBe('  |');
        $this->getRows()[2]->shouldBe('   ');
        $this->getRows()[3]->shouldBe('  |');
        $this->getRows()[4]->shouldBe('   ');
    }

    public function it_is_2_of_size_1()
    {
        $this->beConstructedWith(2, 1);
        $this->getRows()[0]->shouldBe(' - ');
        $this->getRows()[1]->shouldBe('  |');
        $this->getRows()[2]->shouldBe(' - ');
        $this->getRows()[3]->shouldBe('|  ');
        $this->getRows()[4]->shouldBe(' - ');
    }

    public function it_is_3_of_size_1()
    {
        $this->beConstructedWith(3, 1);
        $this->getRows()[0]->shouldBe(' - ');
        $this->getRows()[1]->shouldBe('  |');
        $this->getRows()[2]->shouldBe(' - ');
        $this->getRows()[3]->shouldBe('  |');
        $this->getRows()[4]->shouldBe(' - ');
    }

    public function it_is_4_of_size_1()
    {
        $this->beConstructedWith(4, 1);
        $this->getRows()[0]->shouldBe('   ');
        $this->getRows()[1]->shouldBe('| |');
        $this->getRows()[2]->shouldBe(' - ');
        $this->getRows()[3]->shouldBe('  |');
        $this->getRows()[4]->shouldBe('   ');
    }
    public function it_is_5_of_size_1()
    {
        $this->beConstructedWith(5, 1);
        $this->getRows()[0]->shouldBe(' - ');
        $this->getRows()[1]->shouldBe('|  ');
        $this->getRows()[2]->shouldBe(' - ');
        $this->getRows()[3]->shouldBe('  |');
        $this->getRows()[4]->shouldBe(' - ');
    }
    public function it_is_6_of_size_1()
    {
        $this->beConstructedWith(6, 1);
        $this->getRows()[0]->shouldBe(' - ');
        $this->getRows()[1]->shouldBe('|  ');
        $this->getRows()[2]->shouldBe(' - ');
        $this->getRows()[3]->shouldBe('| |');
        $this->getRows()[4]->shouldBe(' - ');
    }

}
