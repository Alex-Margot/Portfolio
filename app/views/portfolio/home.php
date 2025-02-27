<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<?php
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'en';
?>
<h1>¯\(ツ)/¯</h1>
<h2>
    <?php echo ($language === 'fr') ? 'Bienvenue sur mon Portfolio' : 'Welcome to my Portfolio'; ?>
</h2>
<p>
    <?php echo ($language === 'fr') ? 'Ceci est la page d\'accueil.' : 'This is the home page.'; ?>
</p>
<p>
    <?php echo ($language === 'fr') ? 'cliquez sur mon nom pour changer la langue ' : 'but in english now.'; ?>
</p>