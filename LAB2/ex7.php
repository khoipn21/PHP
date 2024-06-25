<!DOCTYPE html>
<html>

<body>
    <?php
    function array_not_unique($my_array)
    {
        $same = array();
        natcasesort($my_array);
        reset($my_array);
        $old_key = NULL;
        $old_value = NULL;
        foreach ($my_array as $key => $value) {
            if ($value === NULL) {
                continue;
            }
            if ($old_value == $value) {
                $same[$old_key] = $old_value;
                $same[$key] = $value;
            }
            $old_value = $value;
            $old_key = $key;
        }
        return $same;
    }

    $testArr = array('xyz@example.com', 'dse@example.com', 'xyz@example.com', 'mno@example.com');
    $not_unique_emails = array_not_unique($testArr);
    foreach ($not_unique_emails as $key => $value) {
        echo "Email: $value, Index: $key <br>";
    }
    ?>
</body>

</html>