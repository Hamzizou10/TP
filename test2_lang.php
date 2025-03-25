<?php
// Assurez-vous d'être dans un environnement de test sécurisé.

    $output = shell_exec('id'); // Exécute la commande id
    echo "<pre>$output</pre>"; // Affiche le résultat
?>
