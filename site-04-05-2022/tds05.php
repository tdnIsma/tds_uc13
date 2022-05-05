<html>

<body>
    <table border="2">
    <?php

    $entrada = 4;

    for ($i = 0; $i <= 10; $i++) {
        $mult = $entrada * $i;
        echo "<tr><td>".$entrada . " x " . $i . "= " . $mult, "<br></td></tr>";
    }

    ?>
    </table>
</body>

</html>