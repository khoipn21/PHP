<?php
function findSum($str1, $str2)
{
    // $str1 = strval($num1);
    // $str2 = strval($num2);

    if (strlen($str1) > strlen($str2)) {
        [$str1, $str2] = [$str2, $str1];
    }
    $result = "";
    $n1 = strlen($str1);
    $n2 = strlen($str2);
    $str1 = strrev($str1);
    $str2 = strrev($str2);
    $carry = 0;
    for ($i = 0; $i < $n1; $i++) {
        $sum = ((ord($str1[$i]) - 48) + (ord($str2[$i]) - 48) + $carry);
        $result .= chr($sum % 10 + 48);
        $carry = $sum / 10;
    }
    for ($i = $n1; $i < $n2; $i++) {
        $sum = (ord($str2[$i]) - 48) + $carry;
        $result .= chr($sum % 10 + 48);
        $carry = $sum / 10;
    }

    if ($carry >= 1)
        $result .= chr($carry % 10 + 48);

    $result = strrev($result);

    return $result;
}

echo findSum("6454513248798645648798465132185764623185", "31651644564551321131884656456546542121");
echo '<br>';
echo findSum("288", "33");
echo '<br>';
