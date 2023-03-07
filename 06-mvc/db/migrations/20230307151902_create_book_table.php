<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBookTable extends AbstractMigration
{
    public function change(): void
    {
        $this->table('book', ['id' => 'id_book'])
            ->addColumn('title', 'string')
            ->addColumn('price', 'integer')
            ->addColumn('isbn', 'string')
            ->addColumn('author', 'string')
            ->addColumn('published_at', 'date')
            ->addColumn('image', 'string', ['null' => true])
            ->create();
    }
}
