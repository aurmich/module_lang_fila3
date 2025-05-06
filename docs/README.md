# Modulo Lang

## Introduzione
Il modulo Lang gestisce tutte le traduzioni, i messaggi e le notifiche del sistema, fornendo un sistema centralizzato per la gestione delle stringhe multilingua e l'internazionalizzazione dell'applicazione.

## Indice
- [Architettura e Componenti](#architettura-e-componenti)
- [Translation Management](#translation-management)
- [Message System](#message-system)
- [Notification System](#notification-system)
- [Best Practices](#best-practices)
- [Documentazione Tecnica](#documentazione-tecnica)
- [Note Importanti](#note-importanti)
### Versione HEAD

- [Collegamenti Bidirezionali](#collegamenti-bidirezionali)

### Versione Incoming

- [Collegamenti correlati](#collegamenti-correlati)

---

- [Documentazione](#documentazione)
- [Dipendenze](#dipendenze)
- [Utilizzo](#utilizzo)

### Versione HEAD

## Architettura e Componenti
- Translation Engine
- Message System
- Notification System
- Cache System

## Translation Management
- File Structure
- Translation Cache
- Validation


### Versione Incoming

## Collegamenti correlati
> - [README.md documentazione generale](../../../docs/README.md)
> - [README.md toolkit bashscripts](../../../bashscripts/docs/README.md)
> - [README.md modulo GDPR](../Gdpr/docs/README.md)
> - [README.md modulo User](../User/docs/README.md)
> - [README.md modulo Lang](../Lang/docs/README.md)
> - [README.md modulo Media](../Media/docs/README.md)
> - [README.md modulo Notify](../Notify/docs/README.md)
> - [README.md modulo Tenant](../Tenant/docs/README.md)
> - [README.md modulo UI](../UI/docs/README.md)
> - [README.md modulo Xot](../Xot/docs/README.md)
> - [Collegamenti documentazione centrale](../../../docs/collegamenti-documentazione.md)

## Architettura e Componenti
- Translation Engine
- Message System
- Notification System
- Cache System

## Translation Management
- File Structure
- Translation Cache
- Validation


---

## Message System
- Message Types
- Message Cache
- Validation
### Versione HEAD


### Versione Incoming


## Notification System
- Email Templates
- SMS Templates
- Push Notifications

## Best Practices
- Translation Structure
- Message Design
- Cache Strategy

## Documentazione Tecnica
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)
- [Best Practices](./BEST-PRACTICES.md)
- [Testing](./testing.md)

## Note Importanti
1. Tutte le traduzioni devono seguire la struttura corretta
2. Seguire le convenzioni di naming
3. Utilizzare i trait forniti
4. Documentare il codice

## Collegamenti Bidirezionali
- [Modulo User](../User/docs/README.md)
- [Modulo UI](../UI/docs/README.md)
- [Modulo Cms](../Cms/docs/README.md)

## Documentazione
- [Guida Iniziale](./getting-started.md)
- [Translation Guide](./translation-guide.md)
- [Message Guide](./message-guide.md)
- [Notification Guide](./notification-guide.md)

## Dipendenze
- Laravel Framework
- Filament
- Livewire
- Volt
- Folio
- Tailwind CSS
- Alpine.js

## Utilizzo
```php
// Esempio di utilizzo translation service
use Modules\Lang\Services\TranslationService;

class MyService
{
    public function __construct(
        protected TranslationService $translation
    ) {}

    public function getTranslation(string $key): string
    {
        return $this->translation->get($key);
    }
}

// Esempio di utilizzo message service
use Modules\Lang\Services\MessageService;

class MyService
{
    public function __construct(
        protected MessageService $message
    ) {}

    public function getMessage(string $key): string
    {
        return $this->message->get($key);
    }
}
```

## Panoramica
Il modulo Lang gestisce tutte le traduzioni dell'applicazione, fornendo un sistema centralizzato per la gestione dei testi multilingua. Si integra con tutti gli altri moduli per garantire una coerenza nelle traduzioni.

## Collegamenti Principali

### Documentazione Core
- [Struttura del Modulo](./structure.md)
- [Gestione Traduzioni](./translations.md)
- [Messaggi Sistema](./messages.md)
- [Notifiche](./notifications.md)
- [Best Practices](./BEST-PRACTICES.md)

### Integrazioni
- [Integrazione con User](../User/docs/README.md)
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con UI](../UI/docs/README.md)

### Best Practices
- [Convenzioni Traduzioni](./translation-conventions.md)
- [Gestione Namespace](./namespace-conventions.md)
- [PHPStan Fixes](./phpstan-fixes.md)

### Testing e Qualità
- [PHPStan Level 9](./PHPSTAN_LEVEL9_FIXES.md)
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md)
- [Testing Best Practices](./testing-best-practices.md)

## Struttura del Modulo

```
Modules/Lang/
├── app/
│   ├── Models/
│   │   └── Translation.php
│   ├── Providers/
│   │   ├── LangServiceProvider.php
│   │   └── LangBaseServiceProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── TranslationResource.php
│   │   ├── Widgets/
│   │   │   └── TranslationStatsWidget.php
│   │   └── Pages/
│   │       └── TranslationManager.php
│   └── Http/
│       └── Controllers/
│           └── TranslationController.php
├── config/
│   └── lang.php
├── database/
│   └── migrations/
│       └── create_translations_table.php
└── resources/
    └── lang/
        ├── it/
        │   ├── auth.php
        │   ├── validation.php
        │   └── messages.php
        └── en/
            ├── auth.php
            ├── validation.php
            └── messages.php
```

## Gestione Traduzioni

### 1. Struttura File di Traduzione
```php
// resources/lang/it/auth.php
return [
    'login' => [
        'title' => 'Accedi',
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la tua password'
        ],
        'remember' => [
            'label' => 'Ricordami',
            'tooltip' => 'Mantieni la sessione attiva'
        ],
        'submit' => [
            'label' => 'Accedi',
            'tooltip' => 'Clicca per accedere'
        ]
    ]
];
```

### 2. Utilizzo in Filament
```php
// ❌ NON FARE QUESTO
->label('Sorgente')

// ✅ FARE QUESTO
->label(['label' => 'Sorgente'])

// ✅ FARE QUESTO (con tooltip)
->label([
    'label' => 'Sorgente',
    'tooltip' => 'Descrizione del campo'
])

// ✅ FARE QUESTO (con placeholder)
->label([
    'label' => 'Sorgente',
    'placeholder' => 'Inserisci la sorgente'
])

// ✅ FARE QUESTO (con icona e colore)
->label([
    'label' => 'Sorgente',
    'icon' => 'heroicon-o-document',
    'color' => 'primary'
])
```

### 3. Utilizzo in Controller
```php
use Modules\Lang\Facades\Lang;

class UserController extends Controller
{
    public function index()
    {
        $title = Lang::get('auth.login.title');
        $emailLabel = Lang::get('auth.login.email.label');
        $emailPlaceholder = Lang::get('auth.login.email.placeholder');
        
        return view('users.index', compact('title', 'emailLabel', 'emailPlaceholder'));
    }
}
```

## Best Practices

### 1. Organizzazione File
- Raggruppare le traduzioni per modulo
- Utilizzare chiavi descrittive
- Mantenere una struttura coerente
- Documentare le chiavi utilizzate

### 2. Convenzioni Naming
```php
// ❌ NON FARE QUESTO
'login_button' => 'Accedi'

// ✅ FARE QUESTO
'login' => [
    'button' => [
        'label' => 'Accedi'
    ]
]
```

### 3. Gestione Namespace
```php
// ❌ NON FARE QUESTO
'user.login.title'

// ✅ FARE QUESTO
'user' => [
    'login' => [
        'title' => 'Accedi'
    ]
]
```

## Dipendenze Principali

### Moduli
- **User**: Traduzioni utente
- **Xot**: Traduzioni core
- **UI**: Traduzioni interfaccia

### Pacchetti
- Laravel Framework
- Filament
- Livewire

## Roadmap

### Prossime Feature
1. Sistema di cache traduzioni
2. Editor visuale traduzioni
3. Import/Export traduzioni

### Miglioramenti Pianificati
1. Ottimizzazione performance
2. Miglioramento UI editor
3. Integrazione con API esterne

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Chiavi mancanti
2. Cache non aggiornata
3. Namespace non trovati

### Soluzioni
1. Verifica la struttura file
2. Pulisci la cache
3. Controlla i namespace

## Riferimenti

### Documentazione
- [Laravel Localization](https://laravel.com/docs/12.x/localization)
- [Filament Forms](https://filamentphp.com/docs/3.x/forms)
- [Livewire](https://livewire.laravel.com/docs)

### Collegamenti Interni
- [User Module](../User/docs/README.md)
- [Xot Module](../Xot/docs/README.md)
- [UI Module](../UI/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Sistema traduzioni
- Editor traduzioni
- Cache traduzioni

#### Changed
- Miglioramento performance
- Ottimizzazione cache
- Refactoring codice

#### Fixed
- Bug traduzioni
- Problemi cache
- Errori namespace

## Collegamenti tra versioni di README.md
* [README.md](bashscripts/docs/README.md)
* [README.md](bashscripts/docs/it/README.md)
* [README.md](docs/laravel-app/phpstan/README.md)
* [README.md](docs/laravel-app/README.md)
* [README.md](docs/moduli/struttura/README.md)
* [README.md](docs/moduli/README.md)
* [README.md](docs/moduli/manutenzione/README.md)
* [README.md](docs/moduli/core/README.md)
* [README.md](docs/moduli/installati/README.md)
* [README.md](docs/moduli/comandi/README.md)
* [README.md](docs/phpstan/README.md)
* [README.md](docs/README.md)
* [README.md](docs/module-links/README.md)
* [README.md](docs/troubleshooting/git-conflicts/README.md)
* [README.md](docs/tecnico/laraxot/README.md)
* [README.md](docs/modules/README.md)
* [README.md](docs/conventions/README.md)
* [README.md](docs/amministrazione/backup/README.md)
* [README.md](docs/amministrazione/monitoraggio/README.md)
* [README.md](docs/amministrazione/deployment/README.md)
* [README.md](docs/translations/README.md)
* [README.md](docs/roadmap/README.md)
* [README.md](docs/ide/cursor/README.md)
* [README.md](docs/implementazione/api/README.md)
* [README.md](docs/implementazione/testing/README.md)
* [README.md](docs/implementazione/pazienti/README.md)
* [README.md](docs/implementazione/ui/README.md)
* [README.md](docs/implementazione/dental/README.md)
* [README.md](../../../../Themes/One/docs/README.md)

---


## Notification System
- Email Templates
- SMS Templates
- Push Notifications

## Best Practices
- Translation Structure
- Message Design
- Cache Strategy

## Documentazione Tecnica
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)
- [Best Practices](./BEST-PRACTICES.md)
- [Testing](./testing.md)

## Note Importanti
1. Tutte le traduzioni devono seguire la struttura corretta
2. Seguire le convenzioni di naming
3. Utilizzare i trait forniti
4. Documentare il codice

## Collegamenti Bidirezionali
- [Modulo User](../User/docs/README.md)
- [Modulo UI](../UI/docs/README.md)
- [Modulo Cms](../Cms/docs/README.md)

## Documentazione
- [Guida Iniziale](./getting-started.md)
- [Translation Guide](./translation-guide.md)
- [Message Guide](./message-guide.md)
- [Notification Guide](./notification-guide.md)

## Dipendenze
- Laravel Framework
- Filament
- Livewire
- Volt
- Folio
- Tailwind CSS
- Alpine.js

## Utilizzo
```php
// Esempio di utilizzo translation service
use Modules\Lang\Services\TranslationService;

class MyService
{
    public function __construct(
        protected TranslationService $translation
    ) {}

    public function getTranslation(string $key): string
    {
        return $this->translation->get($key);
    }
}

// Esempio di utilizzo message service
use Modules\Lang\Services\MessageService;

class MyService
{
    public function __construct(
        protected MessageService $message
    ) {}

    public function getMessage(string $key): string
    {
        return $this->message->get($key);
    }
}
```

## Panoramica
Il modulo Lang gestisce tutte le traduzioni dell'applicazione, fornendo un sistema centralizzato per la gestione dei testi multilingua. Si integra con tutti gli altri moduli per garantire una coerenza nelle traduzioni.

## Collegamenti Principali

### Documentazione Core
- [Struttura del Modulo](./structure.md)
- [Gestione Traduzioni](./translations.md)
- [Messaggi Sistema](./messages.md)
- [Notifiche](./notifications.md)
- [Best Practices](./BEST-PRACTICES.md)

### Integrazioni
- [Integrazione con User](../User/docs/README.md)
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con UI](../UI/docs/README.md)

### Best Practices
- [Convenzioni Traduzioni](./translation-conventions.md)
- [Gestione Namespace](./namespace-conventions.md)
- [PHPStan Fixes](./phpstan-fixes.md)

### Testing e Qualità
- [PHPStan Level 9](./PHPSTAN_LEVEL9_FIXES.md)
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md)
- [Testing Best Practices](./testing-best-practices.md)

## Struttura del Modulo

```
Modules/Lang/
├── app/
│   ├── Models/
│   │   └── Translation.php
│   ├── Providers/
│   │   ├── LangServiceProvider.php
│   │   └── LangBaseServiceProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── TranslationResource.php
│   │   ├── Widgets/
│   │   │   └── TranslationStatsWidget.php
│   │   └── Pages/
│   │       └── TranslationManager.php
│   └── Http/
│       └── Controllers/
│           └── TranslationController.php
├── config/
│   └── lang.php
├── database/
│   └── migrations/
│       └── create_translations_table.php
└── resources/
    └── lang/
        ├── it/
        │   ├── auth.php
        │   ├── validation.php
        │   └── messages.php
        └── en/
            ├── auth.php
            ├── validation.php
            └── messages.php
```

## Gestione Traduzioni

### 1. Struttura File di Traduzione
```php
// resources/lang/it/auth.php
return [
    'login' => [
        'title' => 'Accedi',
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email'
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la tua password'
        ],
        'remember' => [
            'label' => 'Ricordami',
            'tooltip' => 'Mantieni la sessione attiva'
        ],
        'submit' => [
            'label' => 'Accedi',
            'tooltip' => 'Clicca per accedere'
        ]
    ]
];
```

### 2. Utilizzo in Filament
```php
// ❌ NON FARE QUESTO
->label('Sorgente')

// ✅ FARE QUESTO
->label(['label' => 'Sorgente'])

// ✅ FARE QUESTO (con tooltip)
->label([
    'label' => 'Sorgente',
    'tooltip' => 'Descrizione del campo'
])

// ✅ FARE QUESTO (con placeholder)
->label([
    'label' => 'Sorgente',
    'placeholder' => 'Inserisci la sorgente'
])

// ✅ FARE QUESTO (con icona e colore)
->label([
    'label' => 'Sorgente',
    'icon' => 'heroicon-o-document',
    'color' => 'primary'
])
```

### 3. Utilizzo in Controller
```php
use Modules\Lang\Facades\Lang;

class UserController extends Controller
{
    public function index()
    {
        $title = Lang::get('auth.login.title');
        $emailLabel = Lang::get('auth.login.email.label');
        $emailPlaceholder = Lang::get('auth.login.email.placeholder');
        
        return view('users.index', compact('title', 'emailLabel', 'emailPlaceholder'));
    }
}
```

## Best Practices

### 1. Organizzazione File
- Raggruppare le traduzioni per modulo
- Utilizzare chiavi descrittive
- Mantenere una struttura coerente
- Documentare le chiavi utilizzate

### 2. Convenzioni Naming
```php
// ❌ NON FARE QUESTO
'login_button' => 'Accedi'

// ✅ FARE QUESTO
'login' => [
    'button' => [
        'label' => 'Accedi'
    ]
]
```

### 3. Gestione Namespace
```php
// ❌ NON FARE QUESTO
'user.login.title'

// ✅ FARE QUESTO
'user' => [
    'login' => [
        'title' => 'Accedi'
    ]
]
```

## Dipendenze Principali

### Moduli
- **User**: Traduzioni utente
- **Xot**: Traduzioni core
- **UI**: Traduzioni interfaccia

### Pacchetti
- Laravel Framework
- Filament
- Livewire

## Roadmap

### Prossime Feature
1. Sistema di cache traduzioni
2. Editor visuale traduzioni
3. Import/Export traduzioni

### Miglioramenti Pianificati
1. Ottimizzazione performance
2. Miglioramento UI editor
3. Integrazione con API esterne

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Chiavi mancanti
2. Cache non aggiornata
3. Namespace non trovati

### Soluzioni
1. Verifica la struttura file
2. Pulisci la cache
3. Controlla i namespace

## Riferimenti

### Documentazione
- [Laravel Localization](https://laravel.com/docs/12.x/localization)
- [Filament Forms](https://filamentphp.com/docs/3.x/forms)
- [Livewire](https://livewire.laravel.com/docs)

### Collegamenti Interni
- [User Module](../User/docs/README.md)
- [Xot Module](../Xot/docs/README.md)
- [UI Module](../UI/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Sistema traduzioni
- Editor traduzioni
- Cache traduzioni

#### Changed
- Miglioramento performance
- Ottimizzazione cache
- Refactoring codice

#### Fixed
- Bug traduzioni
- Problemi cache
- Errori namespace
