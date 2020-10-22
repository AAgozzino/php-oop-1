<?php
    // Creare una nuova classe
    class User {
        // Attributi della classe
        public $nome;
        public $cognome;
        public $email;
        public $eta;
    }

    // Instanziare un nuovo oggetto
    $user1 = new User();
    // Accedere agli attributi e attribuire il valore
    $user1->nome = "Anna";
    $user1->cognome = "Agozzino";
    $user1->email = "anna@gmail.com";
    $user1->eta = 29;

    var_dump($user1);
?>
