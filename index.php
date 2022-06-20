<!DOCTYPE html>
<html>

<body>

    <?php

    greeting("Eslam Mongy", "female");

    function greeting($name, $gender = "")
    {
        $gender = strtolower($gender);
        if ($gender == "male") {
            echo "Hello Mr: $name <br>";
        } else if ($gender == "female") {
            echo "Hello Miss: $name <br>";
        } else {
            echo "Hello $name <br>";
        }
    }

    echo "<br>";
    echo get_arguments("Hello", "Elzero", "Web", "School");

    function get_arguments(...$args)
    {
        $all = '';
        foreach ($args as $arg) {
            $all .= $arg . " ";
        }
        return $all;
    }

    echo "<br>";
    echo sum_all(5, 10, 5, 10);
    function sum_all(...$nums)
    {
        $sum_nums = 0;
        foreach ($nums as $num) {
            if ($num == 5) {
                $num = 0;
            } else if ($num == 10) {
                $num = 20;
            }
            $sum_nums += $num;
        }
        return $sum_nums;
    }

    echo "<br>";
    echo multiply(100.5, 10, "B");
    function multiply(...$nums)
    {

        $malti_nums = 1;
        foreach ($nums as $num) {
            if (gettype($num) == "string") {
                continue;
            } else if (is_float($num)) {
                $num = (int) $num;
            }
            $malti_nums *= $num;
        }
        return $malti_nums;
    }
    echo "<br>";
    echo check_status(True, "Eslam Mongy", 25); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    function check_status($a, $b, $c)
    {
        $name = "";
        $age = 0;
        $status = "";

        foreach ([$a, $b, $c] as $value) {
            if (gettype($value) == "string") {
                $name = $value;
            } else if (is_int($value)) {
                $age = $value;
            } else {
                $status = ($value == true) ? "You Are Available For Hire" : " You Are Not Available For Hire";
            }
        }
        $msg =  "Hello $name, Your Age Is $age, $status";
        return $msg;
    }
    echo "<br>";


    $message = "Hello";
    function Hello($someone)
    {
        return "Hello $someone";
    }

    echo $message("Osama");
    // Hello Osama
    echo "<br>";
    $greet = function ($name) {
        return "Greating $name";
    };

    echo $greet("Osama");
    echo "<br>";

    $greeting = fn ($name) => "Greating $name";

    echo $greeting("Osama");
    echo "<br>";


    ?>

</body>