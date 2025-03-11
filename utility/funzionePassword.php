<?php
    function generaPassword($character, $lung_pass) {
        $password = substr(str_shuffle($character), 0, $lung_pass);
        return $password;
    }
?>