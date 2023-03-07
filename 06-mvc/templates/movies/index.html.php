<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto">
    <h1>Liste des films</h1>

    <div class="flex flex-wrap -mx-4">
        <?php foreach ($movies as $movie) { ?>
            <div class="w-1/4">
                <div class="m-4">
                    <h2><?= $movie->title; ?></h2>
                    <img src="<?= $movie->cover(); ?>" alt="<?= $movie->title; ?>">
                    <a href="/film/<?= $movie->id_movie; ?>">Voir</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
