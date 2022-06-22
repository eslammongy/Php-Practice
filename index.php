<?php
include("model.php")
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = "Welcome First Post ";
    $arrayofTxt = ["welcome", "there", "first", "post"];
    echo changeFirstCharState($txt, "lower");
    echo "<br>";
    echo repeatStringText("Hello", 5, "**");
    echo "<br>";
    echo convertStrToLowerCase($txt);
    echo "<br>";
    echo reverseString("welcome");
    echo "<br>";
    echo reverseString2("welcome");
    echo "<br>";
    echo getStringLength("welcome");
    echo "<br>";
    print_r(explodeString($txt, " "));
    echo "<br>";
    echo implodeString($arrayofTxt, " ");

    ?>

</body>