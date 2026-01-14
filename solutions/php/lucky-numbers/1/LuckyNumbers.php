<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $n1 = '';
        $n2 = '';
        foreach($digitsOfNumber1 as $v){
            $n1.=$v;
        }
        foreach($digitsOfNumber2 as $v){
            $n2.=$v;
        }
        return (int)$n1 + (int)$n2;
    }

    public function isPalindrome(int $number): bool
    {
        $arr = str_split(trim((string)$number));
        $reversed_number = implode('',array_reverse($arr));
        return (string)$number === (string)$reversed_number;
    }

    public function validate(string $input): string
    {
        if($input !=0 && !$input){
            return 'Required field';
        }elseif((int)$input <=0){
           return 'Must be a whole number larger than 0';
        }else{
           return '';
        }
    }
}
