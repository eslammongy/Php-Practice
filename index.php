<?php
include("model.php")
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = "Welcome there this is my first post here";

    echo changeFirstCharState($txt, "lower");
    echo "<br>";
    echo repeatStringText("Hello", 5, "**");

    ?>

</body>