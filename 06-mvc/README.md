# Mini Framework MVC

Après avoir cloné le dépôt, ne pas oubliez d'installer les dépendances Composer :

```bash
composer install
```

Ne pas oublier de lancer le serveur de développement :

```bash
php -S 127.0.0.1:8000 -t public
```

Pour lancer les migrations de la base de données :

```bash
./vendor/bin/phinx migrate
```

Pour remplir la BDD :

```bash
vendor/bin/phinx seed:run
```
