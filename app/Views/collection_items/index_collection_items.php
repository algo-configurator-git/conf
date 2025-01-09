<?php foreach($collection_items as $collection_item): ?>
    <a href="<?= site_url('collections/items/' . $collection_item['id']) ?>"><?= esc($collection_item['product_sku']) ?></a>
    <a href="<?= site_url('collections/items/edit/' . $collection_item['id']) ?>">Edit</a>
    <a href="<?= site_url('collections/items/delete/' . $collection_item['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
<?php endforeach; ?>