<?php

require __DIR__.'/Book.php';

$b = new Book('Harry Potter à l\'école des sorciers', 250);
?>

<p>On est sur la page <?= $b->page(); ?></p>
<p>On tourne la page 1 fois</p>
<?php $b->nextPage(); ?>
<p>On est sur la page <?= $b->page(); ?></p>
<p>On ferme le livre</p>
<?php $b->close(); ?>
<p>On est sur la page <?= $b->page(); ?></p>

<h1>Le titre du livre est : <?= $b->getTitle(); ?></h1>
<p>Il y a <?= $b->countPages(); ?> pages.</p>

<p>On tourne la page 900 fois</p>
<?php for ($i = 0; $i < 300; $i++) {
    $b->nextPage()->nextPage()->nextPage();
} ?>
<p>On est sur la page <?= $b->page(); ?></p>

<?php

require __DIR__.'/Library.php';

$l = new Library();
$l->addBook($b); // Ajoute le livre b dans un tableau
$l->addBooks([ // Ajoute les livres suivant dans un tableau
    new Book('Chambre des secrets', 300),
    new Book('Prisonnier d\'Azkaban', 400),
    new Book('Coupe de feu', 500),
]);
?>

<h2>Ma bibliothèque (<?= $l->count() ?> livres)</h2>
<ul>
    <?php foreach ($l->books() as $book) { ?>
        <li><?= $book->getTitle(); ?></li>
    <?php } ?>
</ul>
<p>On a un total de <?= $l->totalPages() ?> pages dans notre bibliothèque.</p>

<h3>On prend le livre Coupe de feu</h3>
<?php $b = $l->getBook('coupe de feu'); ?>

<?php if ($b) { ?>
    <h1>Le titre du livre est : <?= $b->getTitle(); ?></h1>
    <p>Il y a <?= $b->countPages(); ?> pages.</p>
<?php } ?>

<h3>Les livres qui commencent par "C"</h3>

<ul>
    <?php foreach ($l->findBooksByLetter('C') as $book) { ?>
        <li><?= $book->getTitle(); ?></li>
    <?php } ?>
</ul>

<h3>On prend un livre au hasard</h3>
<?php $b = $l->randomBook(); ?>
<?php if ($b) { ?>
    <h1>Le titre du livre est : <?= $b->getTitle(); ?></h1>
    <p>Il y a <?= $b->countPages(); ?> pages.</p>
<?php } ?>
