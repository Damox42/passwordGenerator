<?php
    include 'index.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $lungh_pass = $_POST['pass'];
        if ($name != "" && $lungh_pass != "") {
            if ($lungh_pass >= 6 && $lungh_pass <= 20) {
                $password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $lungh_pass);
                echo "<p>Ciao $name, la tua password è: $password</p>";
            } else {
                echo "<p>La lunghezza della password deve essere compresa tra 6 e 20 caratteri</p>";
            }
        } else {
            echo "<p>Compila tutti i campi</p>";
        }   
    }
?>