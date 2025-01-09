<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Collection</title>
</head>
<body>
<h1>Create Collection</h1>
<form action="<?= site_url('collections/create') ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>
