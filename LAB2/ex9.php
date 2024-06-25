<!DOCTYPE html>
<html>

<body>
    <?php
    function is_str_lowercase($str1)
    {
        for ($sc = 0; $sc < strlen($str1); $sc++) {
            if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) {
                echo "The string '" . $str1 . "' is not in lowercase." . "<br>";
                return;
            }
        }
        echo "The string '" . $str1 . "' is in lowercase." . "<br>";
    }
    $str1 = 'abc def Ghi';
    $str2 = 'abc def ghi';

    is_str_lowercase($str1);
    is_str_lowercase($str2);

    ?>
</body>

</html>