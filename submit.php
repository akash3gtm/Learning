<html>
<body>

Table of
<?php
    $n = $_POST["num"];
    echo $n, " :<br>" ;
    for($i = 1; $i <=10; $i++)
    {
        echo $n, " * ", $i, " = ", $i*$n, "<br>" ;
    }
?>

</body>
</html>