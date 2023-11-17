<?php
include("database.php");
if (isset($_GET['id'])) {
    $acountID = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $fetchAccountsQuery = "SELECT * FROM transactions WHERE account_id = $acountID";
    $accountsResult = $conx->query($fetchAccountsQuery);
}
else {
    $fetchClientsQuery = "SELECT * FROM transactions";
    $accountsResult = $conx->query($fetchClientsQuery);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Banck</title>
    <style>
    section {
        height: auto;
    }

    table {
        border: 2px solid black;
        margin-right: 10px;
    }

    th,
    td {
        border: 2px solid black;
        padding: 5px 10px;

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
                <th>type</th>
                <th>amount</th>
                <th>account_id</th>
            </tr>
            <tbody>
                <?php 
if(!empty($accountsResult)){
    foreach($accountsResult as $client ){
        echo '<tr>';
        echo '<td>' . $client['id'] . '</td>';
        echo '<td>' . $client['type'] . '</td>';
        echo '<td>' . $client['amount'] . '</td>';
        echo '<td>' . $client['account_id'] . '</td>';
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