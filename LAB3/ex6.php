<!DOCTYPE html>
<html>

<body>
    <?php
    function toUpperCase($string)
    {
        return strtoupper($string);
    }

    function toLowerCase($string)
    {
        return strtolower($string);
    }

    function capitalize($string)
    {
        return ucfirst($string);
    }

    function capitalizeAll($string)
    {
        return ucwords($string);
    }

    $string = "hello world!";
    echo toUpperCase($string);
    echo '<br>';
    echo toLowerCase($string);
    echo '<br>';
    echo capitalize($string);
    echo '<br>';
    echo capitalizeAll($string);
    echo '<br>';
    ?>

</body>

</html>