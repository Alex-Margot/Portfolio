<?php
// Récupère la page demandée (par défaut "home")
$page = $_GET['page'] ?? 'home';

// Définit le chemin du fichier à inclure
$pagePath = __DIR__ . "/app/views/portfolio/$page.php";

// Vérifie si la page existe
if (file_exists($pagePath)) {
    include __DIR__ . "/app/views/includes/header.php";
    include $pagePath;
    include __DIR__ . "/app/views/includes/footer.php";
} else {
    include __DIR__ . "/app/views/includes/header.php";
    echo "<h2>Erreur 404</h2><p>La page demandée n'existe pas.</p>";
    include __DIR__ . "/app/views/includes/footer.php";
}
