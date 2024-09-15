<?php
class test1{
    static public function last_word($sentence){
        $sentence = trim($sentence);
        if(empty($sentence)){
            $numLastWord = 0;
        }
        else {
            $arrSentence = explode(" ", $sentence);
            $numLastWord = strlen($arrSentence[count($arrSentence) - 1]);
        }
        return $numLastWord;
    }

    static public function extract_string($str){
        $matches = [];
        preg_match_all('/\[(.*?)\]/', $str, $matches);

        if (!empty($matches[1])) {
            return implode(' ', $matches[1]);
        }
        return "";
    }
}