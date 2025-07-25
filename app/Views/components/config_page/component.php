<div class="component" data-category-id="<?= esc($id) ?>" data-category-name="<?= esc($name) ?>">
    <div class="component-part component-img">
        <img src="<?= esc($icon) ?>" alt="<?= esc($name) ?>"/>
    </div>

    <div class="component-part component-info">
        <span class="component-name"><?= esc($name) ?></span>
        <?php if (!empty($required)): ?>
            <img src="/assets/images/icons/config_page/warning_img.svg" alt="Обязательный" />
        <?php endif; ?>
    </div>

    <div class="component-part component-product-count"><?=  esc(print_r($count, true));  ?> товаров</div>

    <button onclick="chooseProductForAssembly(<?= esc($id) ?>, '<?= esc($name) ?>')" class="component-part primary-btn select-button">
        Выбрать <img src="/assets/images/buttons/plus-review.svg" alt="">
    </button>
</div>
