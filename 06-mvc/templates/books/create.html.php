<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto px-3">
    <?php if (!empty($errors)) { ?>
        <div class="bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error; ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form action="" method="post" class="w-1/2 mx-auto">
        <div class="mb-4">
            <label for="title" class="block">Titre</label>
            <input type="text" name="title" id="title" class="border-0 border-b focus:ring-0 w-full" value="<?= $book->title; ?>">
        </div>
        <div class="mb-4">
            <label for="isbn" class="block">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="border-0 border-b focus:ring-0 w-full" value="<?= $book->isbn; ?>">
        </div>

        <div class="text-center">
            <button class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200">Créer</button>
        </div>
    </form>
</div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
