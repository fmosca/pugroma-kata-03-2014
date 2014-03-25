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

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->assertequals('FizzBuzz', $output[$i]);
            } elseif ($i % 3 == 0) {
                $this->assertequals('Fizz', $output[$i]);
            } elseif ($i % 5 == 0) {
                $this->assertequals('Buzz', $output[$i]);
            } else {
                $this->assertequals($i, $output[$i]);
            }
        }

    }

    public function testPrint()
    {
//        $this->markTestSkipped('OUTPUT');
        $kata = new Kata();
        ob_start();
        $kata->printFizBuzz();
        $output = ob_get_clean();
        $outputArray = explode("\n", $output);


        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $this->assertequals('FizzBuzz', $outputArray[$i-1]);
            } elseif ($i % 3 == 0) {
                $this->assertequals('Fizz', $outputArray[$i-1]);
            } elseif ($i % 5 == 0) {
                $this->assertequals('Buzz', $outputArray[$i-1]);
            } else {
                $this->assertequals($i, $outputArray[$i-1]);
            }
        }


    }
}
