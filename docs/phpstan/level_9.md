


# Rapporto PHPStan Livello 9 per il modulo Lang

Data analisi: 2025-04-15 22:02:32

## Riepilogo

Trovati 3 errori al livello 9.

## Errori e suggerimenti

### File: `/var/www/html/<nome progetto>/laravel/Modules/Lang/app/Actions/GetTransPathAction.php`

#### Linea 39: Parameter #2 $path of function module_path expects string, mixed given.

**Suggerimento generale**: Rivedi il codice per assicurarti che:
- Tutte le classi/interfacce utilizzate siano importate correttamente
- I tipi siano dichiarati e utilizzati in modo coerente
- Le variabili siano inizializzate prima dell'uso
- I nomi di metodi e proprietà siano corretti

### File: `/var/www/html/<nome progetto>/laravel/Modules/Lang/app/Models/Post.php`

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
aurmich/dev
aurmich/dev
aurmich/dev

## Collegamenti tra versioni di level_9.md
* [level_9.md](../../../Chart/docs/phpstan/level_9.md)
* [level_9.md](../../../Reporting/docs/phpstan/level_9.md)
* [level_9.md](../../../Gdpr/docs/phpstan/level_9.md)
* [level_9.md](../../../Notify/docs/phpstan/level_9.md)
* [level_9.md](../../../Xot/docs/phpstan/level_9.md)
* [level_9.md](../../../Dental/docs/phpstan/level_9.md)
* [level_9.md](../../../User/docs/phpstan/level_9.md)
* [level_9.md](../../../UI/docs/phpstan/level_9.md)
* [level_9.md](../../../Lang/docs/phpstan/level_9.md)
* [level_9.md](../../../Job/docs/phpstan/level_9.md)
* [level_9.md](../../../Media/docs/phpstan/level_9.md)
* [level_9.md](../../../Tenant/docs/phpstan/level_9.md)
* [level_9.md](../../../Activity/docs/phpstan/level_9.md)
* [level_9.md](../../../Patient/docs/phpstan/level_9.md)
* [level_9.md](../../../Cms/docs/phpstan/level_9.md)

