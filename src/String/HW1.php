<?php

namespace Developer\EmptyProject\String;

class HW1
{
    /**
     * Reverse input string
     *
     * @param string $inputString
     * @return string
     */
    public function reverseString(string $inputString): string
    {
        $outputString = '';
        for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
            $outputString .= $inputString[$i];
        }
        return $outputString;
    }
}
