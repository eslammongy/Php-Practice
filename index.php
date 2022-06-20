<?php
include("model.php")
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = "Welcome There This Is My First Post Here";

    echo changeFirstCharState($txt, "lower");
    echo "<br>";
    echo repeatStringText("Hello", 5, "**");
    echo "<br>";
    echo convertStrToLowerCase($txt)

    ?>

</body>