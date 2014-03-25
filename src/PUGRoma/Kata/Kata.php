<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

    /**
     * @param integer
     * @return string
     */
    public function fizzBuzz($numero)
    {
        $map = array(
            15  => 'FizzBuzz',
            3   => 'Fizz',
            5   => 'Buzz',

        );

        foreach ($map as $chiave => $output) {
            if ($numero % $chiave == 0) {
                return $output;
            }
        }

        return $numero;
    }

    /**
     * @return string
     */
    public function stampa()
    {
        $array = array_map(array($this, 'fizzBuzz'), range(1, 100));

        return implode(PHP_EOL, $array);
    }
}
