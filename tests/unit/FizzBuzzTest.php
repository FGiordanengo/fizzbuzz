<?php


use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../src/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{

    private FizzBuzz $fizzBuzz;

    protected function setUp(): void {
        $this->fizzBuzz = new FizzBuzz();
    }


    public function testFizzBuzz()
    {
        $this->assertEquals(["1"], $this->fizzBuzz->generate(1));
        $this->assertEquals(["1", "2", "Fizz"], $this->fizzBuzz->generate(3));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz"], $this->fizzBuzz->generate(5));
        $this->assertEquals(["1", "2", "Fizz", "4", "Buzz", "Fizz", "7", "8", "Fizz", "Buzz", "11", "Fizz", "13", "14", "FizzBuzz"], $this->fizzBuzz->generate(15));
    }

    public function testFizzBuzzWithZero()
    {
        $this->assertEquals([], $this->fizzBuzz->generate(0));
    }

    public function testFizzBuzzWithNegative()
    {
        $this->assertEquals([], $this->fizzBuzz->generate(-5));
    }
}


