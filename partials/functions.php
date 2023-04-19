<?php 
    
    $pswLength = $_GET['password-length'] ?? 0;

    //funzione per generare la password
    function randomPsw($length){

        $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz0123456789!?#$%&-_@';

        return substr(str_shuffle($characters), 0, $length);

    }


?>