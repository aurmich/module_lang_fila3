<<<<<<< Updated upstream


=======

=======

>>>>>>> aurmich/dev

=======

>>>>>>> aurmich/dev
=======

>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
# Rapporto PHPStan Livello 3 per il modulo Lang

Data analisi: 2025-04-15 22:01:56

## Riepilogo

Trovati 2 errori al livello 3.

## Errori e suggerimenti

### File: `/var/www/html/saluteora/laravel/Modules/Lang/app/Models/Post.php`

#### Linea 101: Class Modules\Lang\Models\Post uses unknown trait GeneaLabs\LaravelModelCaching\Traits\Cachable.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

#### Linea 160: PHPDoc type array<int, string> of property Modules\Lang\Models\Post::$appends is not covariant with PHPDoc type list<string> of overridden property Illuminate\Database\Eloquent\Model::$appends.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

## Risorse utili

- [Documentazione PHPStan](https://phpstan.org/user-guide/getting-started)
- [Tipi in PHP](https://www.php.net/manual/en/language.types.declarations.php)
- [PSR-12: Standard di codifica](https://www.php-fig.org/psr/psr-12/)


=======
aurmich/dev
=======

>>>>>>> aurmich/dev

=======
aurmich/dev
>>>>>>> aurmich/dev
=======
aurmich/dev
>>>>>>> aurmich/dev

=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
=======
# Analisi PHPStan Livello 3 per il modulo Lang

Data: Wed Apr 23 21:22:43 CEST 2025

## Errore di esecuzione

```
Note: Using configuration file /var/www/html/_bases/base_quaeris_fila3_mono/laravel/phpstan.neon.
  0/48 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%[1G[2K 20/48 [▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░░░░]  41%[1G[2K 40/48 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░]  83%[1G[2K 48/48 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

{"totals":{"errors":0,"file_errors":1},"files":{"/var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Lang/app/Models/Post.php":{"errors":1,"messages":[{"message":"PHPDoc type array<int, string> of property Modules\\Lang\\Models\\Post::$appends is not covariant with PHPDoc type list<string> of overridden property Illuminate\\Database\\Eloquent\\Model::$appends.","line":160,"ignorable":true,"tip":"You can fix 3rd party PHPDoc types with stub files:\n   https://phpstan.org/user-guide/stub-files","identifier":"property.phpDocType"}]}},"errors":[]}```
>>>>>>> Stashed changes
