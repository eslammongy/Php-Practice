<?php
include("model.php")
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = "Welcome First Post";

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
    ?>

</body>