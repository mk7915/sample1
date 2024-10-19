<?php
function get_fizzbuzz_of(int $number): string{
  if($number % 15 === 0){
    return 'FizzBuzz!';
  }
  if($number % 3 === 0) {
    return 'Fizz!';
  }
  if($number % 5 === 0) {
    return 'Buzz!';
  }
  return $number;
}