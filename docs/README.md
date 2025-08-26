# Modulo Lang - Sistema di Gestione Lingue e Traduzioni

## Panoramica

Il modulo Lang fornisce un sistema completo di gestione delle lingue e traduzioni per l'applicazione Laraxot PTVX. Gestisce il caricamento automatico delle traduzioni, la configurazione delle lingue supportate e l'integrazione con il sistema di traduzione di Laravel.

## Caratteristiche Principali

- **Gestione Lingue**: Supporto per multiple lingue (IT, EN, DE)
- **Caricamento Automatico**: Caricamento automatico delle traduzioni dai moduli
- **Namespace Modulari**: Sistema di namespace per evitare conflitti
- **Validazione**: Controllo automatico delle chiavi di traduzione
- **Performance**: Sistema di cache per le traduzioni
- **Fallback**: Gestione automatica delle traduzioni mancanti

## Struttura del Modulo

```
Modules/Lang/
├── app/
│   ├── Providers/
│   │   └── LangServiceProvider.php
│   ├── Models/
│   │   ├── Language.php
│   │   └── Translation.php
│   └── Services/
│       └── TranslationService.php
├── config/
├── database/
├── docs/
├── lang/
│   ├── it/
│   │   ├── common.php
│   │   ├── validation.php
│   │   ├── errors.php
│   │   └── txt.php
│   ├── en/
│   └── de/
├── resources/
└── tests/
```

## Componenti Principali

### LangServiceProvider

Service provider principale che gestisce il caricamento delle traduzioni:

```php
class LangServiceProvider extends ServiceProvider
{
    protected string $module_name = 'Lang';
    
    public function boot(): void
    {
        parent::boot();
        
        // Carica le traduzioni del modulo
        $this->loadTranslationsFrom(
            module_path('Lang', 'lang'),
            'lang'
        );
    }
}
```

### Language Model

Modello per la gestione delle lingue supportate:

```php
class Language extends Model
{
    protected $fillable = [
        'code',
        'name',
        'native_name',
        'is_active',
        'is_default',
        'sort_order',
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
        'is_default' => 'boolean',
        'sort_order' => 'integer',
    ];
}
```

### Translation Model

Modello per la gestione delle traduzioni dinamiche:

```php
class Translation extends Model
{
    protected $fillable = [
        'language_id',
        'namespace',
        'key',
        'value',
        'group',
    ];
    
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
```

## Configurazione

### Configurazione Base

```php
// config/lang.php
return [
    'default' => env('APP_LOCALE', 'it'),
    'fallback_locale' => 'en',
    'available_locales' => ['it', 'en', 'de'],
    'supported_locales' => [
        'it' => [
            'name' => 'Italiano',
            'native_name' => 'Italiano',
            'flag' => '🇮🇹',
        ],
        'en' => [
            'name' => 'English',
            'native_name' => 'English',
            'flag' => '🇬🇧',
        ],
        'de' => [
            'name' => 'Deutsch',
            'native_name' => 'Deutsch',
            'flag' => '🇩🇪',
        ],
    ],
];
```

### Environment Variables

```env
APP_LOCALE=it
APP_FALLBACK_LOCALE=en
LANG_DEBUG=true
LANG_CACHE_ENABLED=true
```

## Utilizzo

### Traduzioni Base

```php
// Utilizzo delle traduzioni
__('lang::common.welcome')
__('lang::validation.required')
__('lang::errors.not_found')

// Con parametri
__('lang::messages.welcome_user', ['name' => $user->name])

// Pluralizzazione
trans_choice('lang::messages.items_count', $count, ['count' => $count])
```

### Traduzioni Modulari

```php
// Traduzioni specifiche del modulo
__('performance::actions.create.label')
__('user::fields.name.label')
__('ptv::messages.success')
```

### Cambio Lingua

```php
// Cambio lingua per l'utente corrente
app()->setLocale('en');

// Cambio lingua per sessione
session(['locale' => 'de']);

// Cambio lingua per utente specifico
$user->update(['preferred_locale' => 'en']);
```

## Struttura delle Traduzioni

### File di Traduzione

Ogni file di traduzione deve seguire la struttura espansa:

```php
// lang/it/common.php
return [
    'welcome' => [
        'label' => 'Benvenuto',
        'placeholder' => 'Inserisci messaggio di benvenuto',
        'help' => 'Messaggio di benvenuto per gli utenti',
    ],
    'loading' => [
        'label' => 'Caricamento',
        'placeholder' => 'Messaggio di caricamento',
        'help' => 'Indica che il sistema sta caricando',
    ],
];
```

### Organizzazione per Contesto

```php
// lang/it/validation.php
return [
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'min' => [
        'string' => 'Il campo :attribute deve contenere almeno :min caratteri',
        'numeric' => 'Il campo :attribute deve essere almeno :min',
    ],
];
```

## Best Practices

### Naming Convention

1. **Chiavi Descrittive**: Usare nomi chiari e descrittivi
2. **Struttura Gerarchica**: Organizzare in gruppi logici
3. **Consistenza**: Mantenere coerenza tra moduli
4. **Documentazione**: Documentare ogni chiave di traduzione

### Struttura Espansa

```php
// ✅ CORRETTO - Struttura espansa
'field_name' => [
    'label' => 'Etichetta Campo',
    'placeholder' => 'Testo placeholder',
    'help' => 'Testo di aiuto',
    'validation' => [
        'required' => 'Campo obbligatorio',
        'invalid' => 'Valore non valido',
    ],
],

// ❌ ERRATO - Struttura piatta
'field_name_label' => 'Etichetta Campo',
'field_name_placeholder' => 'Testo placeholder',
```

### Gestione Parametri

```php
// ✅ CORRETTO - Con parametri
'welcome_user' => 'Benvenuto, :name!',
'items_count' => '{0} Nessun elemento|{1} Un elemento|[2,*] :count elementi',

// Utilizzo
__('lang::messages.welcome_user', ['name' => $user->name])
trans_choice('lang::messages.items_count', $count, ['count' => $count])
```

## Testing

Il modulo Lang include una suite completa di test Pest per garantire la qualità e la robustezza del codice.

### Struttura Testing
```
tests/
├── Pest.php                    # Configurazione Pest
├── TestCase.php               # TestCase base del modulo
├── Unit/                      # Test unitari
│   ├── Models/               # Test modelli
│   ├── Actions/              # Test actions
│   └── Services/             # Test services
└── Feature/                   # Test di integrazione
    └── LangBusinessLogicTest.php
```

### Esecuzione Test
```bash
cd /var/www/html/ptvx/laravel

# Tutti i test del modulo
./vendor/bin/pest Modules/Lang/tests/

# Solo test unitari
./vendor/bin/pest Modules/Lang/tests/Unit/

# Solo test di integrazione
./vendor/bin/pest Modules/Lang/tests/Feature/
```

### Documentazione Testing
Per informazioni dettagliate sui test, consultare:
- [Setup Testing](testing-setup.md) - Configurazione e utilizzo dei test
- [Testing Overview](../../../docs/testing-overview.md) - Panoramica generale testing
- [Testing Guidelines](../../../docs/testing-guidelines.md) - Linee guida testing

## Performance

### Caching

```php
// Abilita cache delle traduzioni
config(['lang.cache_enabled' => true]);

// Pulisci cache
php artisan lang:clear

// Pubblica cache
php artisan lang:publish
```

### Ottimizzazioni

1. **Lazy Loading**: Carica solo le traduzioni necessarie
2. **Compressione**: Comprimi le traduzioni per la produzione
3. **CDN**: Utilizza CDN per le traduzioni statiche
4. **Monitoring**: Monitora le performance del caricamento

## Sicurezza

### Validazione Input

```php
// Validazione delle chiavi di traduzione
if (!Lang::has($key)) {
    throw new InvalidTranslationKeyException("Translation key '{$key}' not found");
}

// Sanitizzazione dei parametri
$safeParams = array_map('htmlspecialchars', $parameters);
```

### Controllo Accessi

```php
// Verifica permessi per modifiche
if (!auth()->user()->can('manage-translations')) {
    abort(403, 'Unauthorized to manage translations');
}
```

## Monitoraggio e Logging

### Log delle Traduzioni

```php
// Log delle traduzioni mancanti
if (!Lang::has($key)) {
    Log::warning('Missing translation key', [
        'key' => $key,
        'locale' => app()->getLocale(),
        'user_id' => auth()->id(),
    ]);
}
```

### Metriche

- Numero chiavi tradotte per lingua
- Chiavi mancanti
- Performance caricamento
- Utilizzo cache

## Troubleshooting

### Problemi Comuni

1. **Chiavi Mancanti**
   - Verificare la struttura dei file
   - Controllare i namespace
   - Verificare il caricamento del modulo

2. **Traduzioni Non Caricate**
   - Controllare il ServiceProvider
   - Verificare i percorsi
   - Controllare i permessi

3. **Cache Corrotta**
   - Pulire la cache
   - Riavviare l'applicazione
   - Verificare la configurazione

### Debug

```php
// Abilita debug
config(['lang.debug' => true]);

// Verifica lingue disponibili
dd(Lang::getLocale(), Lang::getFallback());

// Verifica traduzioni caricate
dd(Lang::get('lang::common'));
```

## Integrazione con Altri Moduli

### Caricamento Automatico

Ogni modulo può registrare le proprie traduzioni:

```php
// Nel ServiceProvider del modulo
public function boot(): void
{
    parent::boot();
    
    $this->loadTranslationsFrom(
        module_path('ModuleName', 'lang'),
        'modulename'
    );
}
```

### Namespace Modulari

```php
// Traduzioni del modulo Performance
__('performance::actions.create.label')

// Traduzioni del modulo User
__('user::fields.name.label')

// Traduzioni del modulo Ptv
__('ptv::messages.success')
```

## Roadmap

### Funzionalità Future

- [ ] Editor visuale per traduzioni
- [ ] Import/Export traduzioni
- [ ] Traduzioni automatiche con AI
- [ ] Versioning delle traduzioni
- [ ] Collaborazione multi-utente
- [ ] Backup e restore

### Miglioramenti

- [ ] Performance optimization
- [ ] Advanced caching
- [ ] Real-time updates
- [ ] Analytics avanzate
- [ ] API REST per traduzioni

## Contributi

### Sviluppo

1. Fork del repository
2. Creazione branch feature
3. Implementazione funzionalità
4. Test completi
5. Pull request con documentazione

### Standard di Codice

- PSR-12 coding standards
- PHPStan livello 9+
- Test coverage >90%
- Documentazione PHPDoc completa

## Licenza

Questo modulo è rilasciato sotto la licenza MIT. Vedi il file LICENSE per i dettagli.

## Supporto

Per supporto tecnico o domande:

- **Issues**: GitHub Issues
- **Documentazione**: Questa documentazione
- **Wiki**: Wiki del progetto
- **Chat**: Canale Slack/Teams

---

*Ultimo aggiornamento: {{ date('Y-m-d') }}*
