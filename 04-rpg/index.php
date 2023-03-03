<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG POO</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <?php
        require __DIR__.'/src/Character.php';
        require __DIR__.'/src/Hunter.php';
        require __DIR__.'/src/Magus.php';
        require __DIR__.'/src/Warrior.php';

        $aragorn = new Warrior('Aragorn');
        $legolas = new Hunter('Legolas');
        $gandalf = new Magus('Gandalf');
    ?>

    <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl my-4">Informations</h2>
        <div class="flex">
            <div class="w-1/3">
                <?= $aragorn->render(); ?>
            </div>
            <div class="w-1/3">
                <?= $legolas->render(); ?>
            </div>
            <div class="w-1/3">
                <?= $gandalf->render(); ?>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl my-4">Combats</h2>

        <p class="mt-6"><?= $aragorn->attack($legolas); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $aragorn->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $legolas->render(); ?>
            </div>
        </div>

        <p class="mt-6"><?= $legolas->rangedAttack($gandalf); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $legolas->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $gandalf->render(); ?>
            </div>
        </div>

        <p class="mt-6"><?= $gandalf->castSpell($aragorn); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $gandalf->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $aragorn->render(); ?>
            </div>
        </div>

        <p class="mt-6"><?= $gandalf->castSpell($gandalf); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $gandalf->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $gandalf->render(); ?>
            </div>
        </div>

        <p class="mt-6"><?= $legolas->rangedAttack($aragorn); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $legolas->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $aragorn->render(); ?>
            </div>
        </div>

        <p class="mt-6"><?= $legolas->rangedAttack($aragorn); ?></p>
        <div class="flex">
            <div class="w-1/2">
                <?= $legolas->render(); ?>
            </div>
            <div class="w-1/2">
                <?= $aragorn->render(); ?>
            </div>
        </div>
    </div>
</body>
</html>
