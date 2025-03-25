<?php
// Définir le chemin du fichier à afficher
$file = 'index.php';

// Vérifier si le fichier existe
if (file_exists($file)) {
    // Utiliser la commande system() pour afficher le contenu du fichier
    // Utilisation de la commande cat sous Linux/Mac
    system("cat $file");
} else {
    echo "Le fichier index.php n'existe pas.";
}
?>
