<?php
$pageParams = \Config\Services::request()->getGet();
unset($pageParams['page']);
?>

<div class="pagination-container">
    <div class="pagination-choice">
        <div class="pagination" id="pagination">

            <!-- Первая страница -->
            <?php
            $firstQuery = $pageParams;
            $firstQuery['page'] = 1;
            ?>
            <a href="<?= current_url() . '?' . http_build_query($firstQuery) ?>" class="page-link<?= ($page == 1) ? ' active' : '' ?>" data-page="1">1</a>

            <?php if ($page > 3): ?>
                <a href="#" class="page-link" data-page="">...</a>
            <?php endif; ?>

            <!-- Динамические страницы вокруг текущей -->
            <?php
            $start = max(2, $page - 1);
            $end = min($totalPages - 1, $page + 1);

            for ($i = $start; $i <= $end; $i++):
                $pageQuery = $pageParams;
                $pageQuery['page'] = $i;
                ?>
                <a href="<?= base_url() . '?' . http_build_query($pageQuery) ?>"
                   class="page-link<?= ($page == $i) ? ' active' : '' ?>"
                   data-page="<?= $i ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $totalPages - 2): ?>
                <a href="#" class="page-link" data-page="">...</a>
            <?php endif; ?>

            <!-- Последняя страница -->
            <?php if ($totalPages > 1): ?>
                <?php
                $lastQuery = $pageParams;
                $lastQuery['page'] = $totalPages;
                ?>
                <a href="<?= current_url() . '?' . http_build_query($lastQuery) ?>"
                   class="page-link<?= ($page == $totalPages) ? ' active' : '' ?>"
                   data-page="<?= $totalPages ?>"><?= $totalPages ?></a>
            <?php endif; ?>
        </div>

        <!-- Кнопка "Показать ещё" -->
        <button class="show-more-btn" id="loadMoreBtn">Показать ещё</button>
    </div>

    <div class="page-choice">
        <div class="items-per-page">Товаров на странице по</div>
        <div id="dropdownBtn" class="dropdown-btn">
            <?= esc($perPage) ?>
            <img src="<?= base_url('assets/images/icons/arrow-down.svg') ?>" class="toggle-arrow" />
        </div>
        <div class="dropdown-content-per-page" id="dropdownMenu">
            <?php foreach ([5, 10, 25] as $pp): ?>
                <?php
                $perPageQuery = \Config\Services::request()->getGet();
                $perPageQuery['perPage'] = $pp;
                ?>
                <a href="<?= current_url() . '?' . http_build_query($perPageQuery) ?>"><?= $pp ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>