<?php

function openCon()
{
    // db gegevens / database login gegevens
    $servername = "192.168.1.22";
    $username = "root";
    $password = "Welkom01!";
    $database = "POC";
    // verbinding word opgezet met database
    $conn = new mysqli($servername, $username, $password, $database);
    return $conn;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"/>

    <title>Vintage for life POC</title>

</head>
<body>
<header>
</header>
<div><h1> <?php echo "TEST POC :)" ?></h1></div>

    <?php
    $conn = openCon();
    $resultaat = $conn->query("SELECT ID, VALUE
                                FROM POC_TABlE
                               ");
    $items = $resultaat->fetch_assoc();
    $array[] = $items;
    print("
                    <tr>
                        <td> " . $array["klantnummer"] . "</td>
                        <td> " . $array["bestelnummer"] . "   </td> 
                    </tr>");
     ?>
<footer >
</footer>
</body>
</html>
