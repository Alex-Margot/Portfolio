<!DOCTYPE html>
<html lang="fr">
<?php
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMPortfolio</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body lang="<?php echo $language; ?>">
<header>
    <!-- Clickable "Alex Margot" for language switch -->
    <h1 id="languageToggle" class="clickable" data-fr="Alex Margot" data-en="Alex Margot">Alex Margot</h1>

    <nav>
        <a href="/?page=home" data-fr="Accueil" data-en="Home">Accueil</a>
        <a href="/?page=me" data-fr="A propos" data-en="About me">A propos</a>
        <a href="/?page=projects" data-fr="Projets" data-en="Projects">Projets</a>
        <a href="/?page=hardskills" data-fr="Compétences techniques" data-en="Hard skills">Compétences</a>
        <a href="/?page=softskills" data-fr="Compétences" data-en="Soft skills">Compétences</a>
        <a href="/?page=contact" data-fr="Coordonnées" data-en="Contact">Coordonnées</a>
    </nav>
</header>

<!-- Link to the external JavaScript file -->
<script src="/scripts/language.js"></script>
</body>
</html>
