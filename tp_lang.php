<?php
// Assurez-vous que le fichier index.html existe dans le même répertoire
$file = 'index.php';

// Vérifiez si le fichier existe avant de tenter de l'afficher
if (file_exists($file)) {
    // Ouvrir et afficher le contenu du fichier
    echo file_get_contents($file);
} else {
    echo "Le fichier index.html n'existe pas.";
}
?>
