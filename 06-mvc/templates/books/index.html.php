<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto px-3">
    <div class="text-center my-8">
        <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200" href="/livre/nouveau">
            Créer un livre
        </a>
    </div>

    <div class="flex flex-wrap -mx-3">
        <?php foreach ($books as $book) { ?>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <a href="/livre/<?= $book->id_book; ?>">
                        <img class="rounded-t-lg" src="<?= $book->image(); ?>" alt="<?= $book->title; ?>">
                        <div class="p-4">
                            <h2 class="text-center"><?= $book->title; ?></h2>
                            <p class="text-lg text-center font-bold"><?= $book->price(); ?> €</p>
                            <p class="text-xs text-center text-gray-400">
                                Par <strong><?= $book->author; ?></strong> en <?= $book->year(); ?>
                            </p>
                            <p class="text-xs text-center text-gray-400">
                                ISBN: <strong><?= $book->isbn; ?></strong>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
