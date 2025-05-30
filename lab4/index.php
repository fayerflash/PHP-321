<?php
function isNumberUpTo12Digits($string) {
    return preg_match('/^\d{1,12}$/', $string) === 1;
}

var_dump(isNumberUpTo12Digits("12345"));      
var_dump(isNumberUpTo12Digits("123456789012")); 
var_dump(isNumberUpTo12Digits("1234567890123")); 
var_dump(isNumberUpTo12Digits("12a45"));       
var_dump(isNumberUpTo12Digits(""));         

$str = 'aaa bcd xxx efg';
preg_match_all('/\b(.)\1+\b/', $str, $matches);
print_r($matches[0]);

$str = 'aaa bcd xxx efg';
preg_match_all('/\b(.)\1+\b/', $str, $matches);
print_r($matches[0]);

$str = 'baaa baaaac baa xaaa baaa';
$result = preg_replace('/(?<=b)aaa/', '!', $str);
echo $result;

$str = 'aa aba abba abbba abca abea';
preg_match_all('/ab*a/', $str, $matches);
print_r($matches[0]);
?>