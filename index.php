<?php 

/* 
    Descrizione
    Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
    L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

    Milestone 1
    Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
    Scriviamo tutto (logica e layout) in un unico file index.php

    Milestone 2
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

*/
    // importo functions
    include './partials/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password Generator</title>
</head>
<body>

    <h1>Generate your random Password</h1>

    <form action="index.php" method="GET">

        <div>
            <label for="password-length">
                How many characters would you like your password to be?
            </label>
        </div>

        <input type="number" name="password-length" id="password-length" min="4" max="15" placeholder="4 to 15">
        <button type="submit">Generate a Password</button>

    </form>


    <h3>Password Created:</h3>
    <pre>
        <?php 

            if($pswLength != ''){

                echo 'Your password is:'. randomPsw($pswLength); 

            } else {

                echo 'You must type a number.';

            }; 
        
        ?>
    </pre>


</body>
</html>