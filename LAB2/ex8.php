<!DOCTYPE html>
<html>

<body>
    <?php
    function check_palindrome($string)
    {
        if ($string == strrev($string)) {
            echo "The string '" . $string . "' is a palindrome.";
        } else {
            echo "The string '" . $string . "' is not a palindrome.";
        }
    }

    $test_string = "madam";
    check_palindrome($test_string);
    ?>
</body>

</html>