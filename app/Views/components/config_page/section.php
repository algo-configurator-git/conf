<div class="category">
    <div class="part-category">
        <h3><?= esc($title) ?></h3>
        <?php if (!empty($required)): ?>
            <div>
                <img src="/assets/images/icons/config_page/warning_img.svg" alt="Обязательно" />
                <span>Обязательные комплектующие</span>
            </div>
        <?php endif; ?>
    </div>

    <?php foreach ($components as $component): ?>
        <?php
            $componentCountItems = array_filter($categoryItemsCounts, fn($item) => $item['id_category'] == $component['id']);
            $componentCountItem = reset($componentCountItems);
            $count = $componentCountItem['count'] ?? 0;
        ?>
        <?= view('components/config_page/component', [
                ...$component,
            'count' => $count,
        ]) ?>
    <?php endforeach; ?>
    <div class="component-choose-item hidden">
        <div>Выбрать ещё</div>
        <button class="component-part primary-btn select-button" id="choose-more" onclick="handleChooseMoreButton(this)">Выбрать</button>
    </div>
    <button class="component-hide-btn">Скрыть всё</button>

</div>
