<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
</head>
<body>
    <h1><?= htmlspecialchars($projet['title']); ?></h1>
    <p><?= htmlspecialchars($projet['description']); ?></p>
    <a href="/portfolio">Back to Portfolio</a>
</body>
</html>
