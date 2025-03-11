<?php
    include 'index.php';
    require_once 'utility/funzionePassword.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $lung_pass = $_POST['pass'];
        $character = '';
        if ($name != "" && $lung_pass != "") {
            if ($lung_pass >= 6 && $lung_pass <= 20) {
                if (isset($_POST['lowercase'])) {
                    $character .= 'abcdefghijklmnopqrstuvwxyz';
                }
                if (isset($_POST['uppercase'])) {
                    $character .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                }
                if (isset($_POST['numbers'])) {
                    $character .= '0123456789';
                }
                if (isset($_POST['symbols'])) {
                    $character .= '!@#$%&*()_+-=[]{};:,.<>?';
                }
                if ($character != '') {
                    $password = generaPassword($character, $lung_pass);
                    echo "<p>La password generata per $name è: $password</p>";
                } else {
                    echo "<p>Seleziona almeno un tipo di carattere</p>";
                }
            }   
        } else {
            echo "<p>La lunghezza della password deve essere compresa tra 6 e 20 caratteri</p>";
        }
    }
?>