<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>Document</title>
</head>
<body>
<?php foreach ($reviews as $review) : ?>
    <div class="review">
        <div class="top-review">
            <span class="name-review"><?= esc($review['name']) ?></span>
            <span class="date-review"><?= esc($review['created_at']) ?></span>
        </div>
        <div class="rating-review">
            <?php $rating = (int) esc($review['rating']); ?>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php
                if ($i < $rating) {
                    echo ('<img src="' . base_url('assets/images/stars/star-bg.svg') . '" alt="star">');
                } else {
                    echo ('<img src="' . base_url('assets/images/stars/star-no-bg.svg') . '" alt="star">');
                }
                ?>
            <?php endfor; ?>
            <button data-action="approve" data-review="<?= $review['id'] ?>">Подтвердить</button>
            <button data-action="reject" data-review="<?= $review['id'] ?>">Отклонить</button>
        </div>
        <p class="info-review"><?= esc($review['message']) ?></p>
    </div>
<?php endforeach; ?>
</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll("button[data-action]").forEach(button => {
            button.addEventListener("click", async () => {
                const action = button.dataset.action;
                const reviewId = button.dataset.review;


                const response = await fetch(`/reviews/${action}/${reviewId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                });

                const text = await response.text();
                console.log(response.status, text);

            });
        });
    });
</script>
</html>