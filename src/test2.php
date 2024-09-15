<?php
class test2{

    public function is_power($number, $base){
        if(is_int($number) && is_int($base)){
            if ($number == 1) {
                return "true";
            }
            while($number > 1){
                if($number % $base != 0){
                    return "false";
                }
                $number /= $base;
            }
            return "true";
        }
        else{
            return "false";
        }
    }

    public function format_number($str){
        return preg_replace('/[^0-9.,]/', '', $str);
    }
    public function sum_digits($int){
        $arr = str_split($int);
        $sum = 0;
        foreach ($arr as $val){
            if(is_numeric($val)){
                    $sum+=$val;
            }
        }
        return $sum;
    }
}
