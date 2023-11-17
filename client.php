<?php

include("database.php");
$fetchClientsQuery = "SELECT * FROM clients";
$clientsResult = $conx->query($fetchClientsQuery);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Banck</title>
    <style>
    th,
    td {
        border: 2px solid black;
        padding: 5px 10px;

    }

    table {
        border: 2px solid black;
        margin-right: 10px;
    }
    </style>
</head>

<body>

    <header>
        <a href="index.php">
            <h1>LOGO</h1>
        </a>
        <nav>
            <a href="client.php">Client</a>
            <a href="acount.php">Acount</a>
            <a href="transaction.php">Transaction</a>
        </nav>
    </header>
    <hr>
    <section>
        <table>
            <tr>

                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>dateNaissance</th>
                <th>nationality</th>
                <th>genre</th>
                <th>acounts</th>
            </tr>
            <tbody>
                <?php 
                if(!empty($clientsResult)){
                    foreach($clientsResult as $client ){
                        echo '<tr>';
                        echo '<td>' . $client['id'] . '</td>';
                        echo '<td>' . $client['first_name'] . '</td>';
                        echo '<td>' . $client['last_name'] . '</td>';
                        echo '<td>' . $client['birth_date'] . '</td>';
                        echo '<td>' . $client['nationality'] . '</td>';
                        echo '<td>' . $client['gender'] . '</td>';
                        echo '<td><a href="acount.php?id=' . $client['id'] .'" >Acounts</a></a></td>';
                    echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <hr>
    <footer>
        <h1>created by Nouaamane</h1>
    </footer>
    <hr>
</body>

</html>