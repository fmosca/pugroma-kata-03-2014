<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }

    public function testFizzBuzz()
    {
        $kata = new Kata();

        $output = $kata->getFizzBuzzArray();

        for ($i = 0; $i < 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->assertEquals('FizzBuzz', $output[$i]);
            } elseif ($i % 3 == 0) {
                $this->assertEquals('Fizz', $output[$i]);
            } elseif ($i % 5 == 0) {
                $this->assertEquals('Buzz', $output[$i]);
            }
        }

    }
}
