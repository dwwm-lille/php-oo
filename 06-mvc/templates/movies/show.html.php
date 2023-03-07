<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto">
    <h1><?= $movie->title; ?></h1>
    <img src="<?= $movie->cover(); ?>" alt="<?= $movie->title; ?>">
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
