<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

    public function getFizzBuzzArray()
    {
        $output = array();
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $output[$i] = 'FizzBuzz';
            } elseif ($i % 3 == 0) {
                $output[$i] = 'Fizz';
            } elseif ($i % 5 == 0) {
                $output[$i] = 'Buzz';
            } else {
                $output[$i] = $i;
            }


        }
        return $output;
    }
}



