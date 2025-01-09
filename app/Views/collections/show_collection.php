<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collection Details</title>
</head>
<body>
<h1><?= esc($collection['name']) ?></h1>
<p><?= esc($collection['description']) ?></p>

<a href="<?= site_url('collections/items/create', ['collection_id' => $collection['id']]) ?>">Create New Collection Items</a> <br>
<?php if(!empty($collection_items)): ?>
<?php view('collections/index_collection_items', ['collection_items' => $collection_items]) ?>
<?php endif; ?>
<a href="<?= site_url('collections') ?>">Back to Collections</a>
</body>
</html>
