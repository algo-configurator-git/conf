<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collections</title>
</head>
<body>
<h1>Collections</h1>
<a href="<?= site_url('collections/create') ?>">Create New Collection</a>
<ul>
    <?php foreach ($collections as $collection): ?>
        <li>
            <a href="<?= site_url('collections/' . $collection['id']) ?>"><?= esc($collection['name']) ?></a>
            <a href="<?= site_url('collections/edit/' . $collection['id']) ?>">Edit</a>
            <a href="<?= site_url('collections/delete/' . $collection['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
