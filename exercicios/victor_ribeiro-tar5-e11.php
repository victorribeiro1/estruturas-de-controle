<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 11</h1>
<?php

    // SELECT * FROM table_users

    $users = [
        [
            "nome" => "Victor Ribeiro Cunha",
            "e-mail" => "victor1234@gmail.com",
            "senha" => "123456"
        ],
        [
            "nome" => "Isabel Martines",
            "e-mail" => "isabel4312@gmail.com",
            "senha" => "3d54cd5"
        ],
        [
            "nome" => "Miguel Fernandez",
            "e-mail" => "miguel4321@gmail.com",
            "senha" => "Ygai$%ux"
        ],
        [
            "nome" => "Rodriguinho da Silva Souza",
            "e-mail" => "rodriguinho1321@gmail.com",
            "senha" => "5g4r4GTH"
        ],
        [
            "nome" => "Menezes Tenessi Soárez",
            "e-mail" => "Menezes1212@gmail.com",
            "senha" => "12_j@A6"
        ]
    ];

    $names = [];
    $emails = [];
    $passwords = [];

    foreach ($users as $user) {
        foreach ($user as $information) {
            $currentInformation = array_search($information, $user);
            
            // Separando as informações por categoria
            if ($currentInformation === "nome") array_push($names, $user[$currentInformation]);
            else if ($currentInformation === "e-mail") array_push($emails, $user[$currentInformation]);
            else array_push($passwords, $user[$currentInformation]);
        }
    }

    // Imprimindo as informações por categoria
    
    echo "Nomes: <br>";
    foreach ($names as $name) {
        echo "$name | ";
    }
    
    echo "<br><br>";
    echo "E-mails: <br>";
    foreach ($emails as $email) {
        echo "$email | ";
    }

    echo "<br><br>";
    echo "Senhas: <br>";
    foreach ($passwords as $password) {
        echo "$password | ";
    }
?>