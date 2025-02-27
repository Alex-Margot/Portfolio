<?php
$file_path_fr = $_SERVER['DOCUMENT_ROOT'] . '\data\projects_fr.json';
$file_contents_fr = file_get_contents($file_path_fr);

$file_path_en = $_SERVER['DOCUMENT_ROOT'] . '\data\projects_en.json';
$file_contents_en = file_get_contents($file_path_en);

if ($file_contents_fr === false || $file_contents_en === false) {
    echo "Error loading file!";
    exit();
}

$projects_fr = json_decode($file_contents_fr, true);
$projects_en = json_decode($file_contents_en, true);

if ($projects_fr === null || $projects_en === null) {
    echo "Error decoding JSON!";
    exit();
}
?>

<div class="projects" id="projects-container">
    <?php foreach ($projects_fr as $index => $project_fr): ?>
        <div class="project">
            <h3 data-fr="<?php echo htmlspecialchars($project_fr['title']); ?>"
                data-en="<?php echo htmlspecialchars($projects_en[$index]['title']); ?>">
                <?php echo htmlspecialchars($project_fr['title']); ?>
            </h3>
            <p data-fr="<?php echo htmlspecialchars($project_fr['description']); ?>"
               data-en="<?php echo htmlspecialchars($projects_en[$index]['description']); ?>">
                <?php echo htmlspecialchars($project_fr['description']); ?>
            </p>
            <a href="<?php echo htmlspecialchars($project_fr['link']); ?>" target="_blank">
                <?php echo "Lien"; ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>
