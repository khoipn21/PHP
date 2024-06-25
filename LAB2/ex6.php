<!DOCTYPE html>
<html>

<body>
    <?php
    function sum($x, $y, $z)
    {
        $z = $x + $y + $z;
        return $z;
    }

    function avg($x, $y, $z)
    {
        sum($x, $y, $z);
        return round(sum($x, $y, $z) / 3, 2);
    }

    echo avg(3, 10, 7);
    ?>

</body>

</html>