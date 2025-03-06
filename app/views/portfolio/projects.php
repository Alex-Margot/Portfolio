<?php
$file_path = $_SERVER['DOCUMENT_ROOT'] . '/data/projects.json';
$file_contents = file_get_contents($file_path);

if ($file_contents === false) {
    echo "Error loading file!";
    exit();
}

$projects = json_decode($file_contents, true);

if ($projects === null) {
    echo "Error decoding JSON!";
    exit();
}

// Détecte la langue (par défaut en français)
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';
?>
<center><h2 data-fr="Voici mes projets récents"
            data-en="Here is my recents projects">Voici mes projets récents</h2></center>
<div class="projects" id="projects-container">
    <?php foreach ($projects as $project_key => $project_data): ?>
        <div class="project">
            <h3 data-fr="<?php echo htmlspecialchars($project_data['fr']['title']); ?>"
                data-en="<?php echo htmlspecialchars($project_data['en']['title']); ?>">
                <?php echo htmlspecialchars($project_data[$lang]['title']); ?>
            </h3>
            <p data-fr="<?php echo htmlspecialchars($project_data['fr']['description']); ?>"
               data-en="<?php echo htmlspecialchars($project_data['en']['description']); ?>">
                <?php echo htmlspecialchars($project_data[$lang]['description']); ?>
            </p>
            <a href="<?php echo htmlspecialchars($project_data[$lang]['link']); ?>" target="_blank">
                Lien
            </a>
        </div>
    <?php endforeach; ?>
</div>
<br><br><br>
