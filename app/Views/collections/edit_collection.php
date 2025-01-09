<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Collection</title>
</head>
<body>
<h1>Edit Collection</h1>
<form action="<?= site_url('collections/edit/' . $collection['id']) ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= esc($collection['name']) ?>" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"><?= esc($collection['description']) ?></textarea><br><br>

    <button type="submit">Save Changes</button>
</form>
</body>
</html>
