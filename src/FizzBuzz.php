<?php

namespace App;

class FizzBuzz
{
    public function generate(int $number): array
    {

        $result = [];

        for ($i = 1; $i <= $number; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result[] = "FizzBuzz";
            } elseif ($i % 3 === 0) {
                $result[] = "Fizz";
            } elseif ($i % 5 === 0) {
                $result[] = "Buzz";
            } else {
                $result[] = (string)$i;
            }
        }

        return $result;
    }
}