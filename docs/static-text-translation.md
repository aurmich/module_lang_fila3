# Traduzione di Testi Statici in Laravel

## Introduzione

La traduzione di testi statici in Laravel può essere gestita utilizzando due approcci principali: file PHP e file JSON. Questa documentazione, basata sul corso di Laravel Daily, analizza entrambi i metodi, evidenziando vantaggi e svantaggi, e propone un'implementazione per progetti multi-modulo.

## Opzioni di Archiviazione delle Traduzioni

### File PHP

I file PHP sono stati il metodo predefinito per lungo tempo. Le traduzioni sono organizzate in file separati per lingua e funzionalità.

**Esempio**:
In un file Blade come `resources/views/auth/register.blade.php`, potremmo avere:
```php
<!-- Nome -->
<div>
    <x-input-label for="name" :value="__('auth.register.name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
```

La traduzione corrispondente sarebbe in `lang/it/auth.php`:
```php
return [
    'register' => [
        'name' => 'Nome',
        'email' => 'Email',
        // ...
    ],
    // ...
];
```

**Nota sulla Cartella `lang`**:
In Laravel 10 e versioni successive, la cartella `lang` non è inclusa di default. Per aggiungerla, eseguire:
```bash
php artisan lang:publish
```

**Vantaggi dei File PHP**:
- Chiavi nidificate a più livelli.
- Separazione delle traduzioni per funzionalità (es. `auth.php`, `validation.php`).
- Possibilità di avere chiavi identiche in file diversi con traduzioni diverse.
- Supporto per commenti nel codice.

**Svantaggi dei File PHP**:
- Necessità di definire tutte le stringhe immediatamente per evitare di mostrare chiavi non tradotte agli utenti.
- Difficoltà per traduttori non tecnici a causa della struttura dei file.
- Rischio di creare confusione con molti file e cartelle.

### File JSON

I file JSON contengono un elenco unico di traduzioni per ogni lingua, con chiavi che rappresentano il testo in inglese e valori che rappresentano la traduzione.

**Esempio**:
In un file Blade:
```php
<h1>{{ __('Welcome to our application') }}</h1>
```

La traduzione corrispondente sarebbe in `lang/it.json`:
```json
{
    "Welcome to our application": "Benvenuto nella nostra applicazione"
}
```

**Vantaggi dei File JSON**:
- Facilità di utilizzo per frasi complete.
- Più intuitivo per traduttori non tecnici.
- Nessuna necessità di creare chiavi astratte.
- Fallback automatico al testo inglese se manca la traduzione.

**Svantaggi dei File JSON**:
- Nessuna struttura nidificata.
- Rischio di duplicazione per frasi simili.
- Difficoltà nella gestione di stringhe plurali.
- File potenzialmente molto grandi in applicazioni complesse.

## Analisi e Ragionamento per Progetti Multi-Modulo

Considerando la struttura di un progetto multi-modulo e le regole di localizzazione esistenti, propongo di adottare principalmente l'approccio con file PHP per le seguenti ragioni:

1. **Struttura**: La struttura nidificata dei file PHP si allinea meglio con l'organizzazione modulare del progetto.
2. **Contesto**: Le chiavi nidificate offrono maggiore chiarezza e contesto, utili in un'applicazione complessa.
3. **Riutilizzo**: Chiavi ben strutturate facilitano il riutilizzo delle traduzioni tra moduli.
4. **Manutenibilità**: Più facile mantenere file separati per funzionalità che un unico file JSON grande.

Tuttavia, per frasi complete o testi lunghi, i file JSON possono essere una scelta migliore.

## Implementazione Pratica

Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare il sistema di traduzione in un progetto multi-modulo:

### 1. Configurazione delle Lingue

```php
// config/app.php
'locale' => 'it',
'fallback_locale' => 'en',
'available_locales' => ['it', 'en'],
```

### 2. Middleware per la Localizzazione

```php
// Modules/Lang/Http/Middleware/SetLocale.php
namespace Modules\Lang\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);
        
        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
        }
        
        return $next($request);
    }
}
```

### 3. Registrazione del Middleware

```php
// app/Http/Kernel.php
protected $middlewareGroups = [
    'web' => [
        // ...
        \Modules\Lang\Http\Middleware\SetLocale::class,
    ],
];
```

### 4. File di Traduzione PHP

```php
// Modules/User/lang/it/auth.php
return [
    'login' => [
        'title' => 'Accedi',
        'email' => 'Indirizzo Email',
        'password' => 'Password',
        'remember' => 'Ricordami',
        'submit' => 'Accedi',
        'forgot' => 'Password dimenticata?',
    ],
    'register' => [
        'title' => 'Registrati',
        'name' => 'Nome',
        'email' => 'Indirizzo Email',
        'password' => 'Password',
        'confirm_password' => 'Conferma Password',
        'submit' => 'Registrati',
        'already_registered' => 'Già registrato?',
    ],
];
```

### 5. File di Traduzione JSON

```json
// Modules/User/lang/it.json
{
    "Welcome to our application": "Benvenuto nella nostra applicazione",
    "Please log in to continue": "Accedi per continuare",
    "Thank you for registering": "Grazie per esserti registrato"
}
```

### 6. Utilizzo nei File Blade

```blade
<!-- Modules/User/resources/views/auth/login.blade.php -->
<h1>{{ __('auth.login.title') }}</h1>
<p>{{ __('Please log in to continue') }}</p>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">{{ __('auth.login.email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
    </div>
    <!-- ... -->
    <button type="submit">{{ __('auth.login.submit') }}</button>
</form>
```

### 7. Gestione delle Route con Prefisso Lingua

```php
// routes/web.php
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {
    // Tutte le route localizzate qui
    Route::get('/', 'HomeController@index')->name('home');
    // ...
});
```

## Casi Speciali

### Stringhe Plurali

- In file PHP:
  ```php
  // lang/it/messages.php
  return [
      'messages' => '{0} Non hai nuovi messaggi|{1} Hai 1 nuovo messaggio|[2,*] Hai :count nuovi messaggi',
  ];
  ```
- In file JSON:
  ```json
  {
      "You have no new messages|You have 1 new message|You have :count new messages": "Non hai nuovi messaggi|Hai 1 nuovo messaggio|Hai :count nuovi messaggi"
  }
  ```
- In Blade:
  ```blade
  {{ trans_choice('{0} You have no new messages|{1} You have 1 new message|[2,*] You have :count new messages', $messagesCount) }}
  ```
- **Raccomandazione**: Preferire i file PHP per le stringhe plurali.

### Modifiche Proposte
- Inserire tutte le stringhe plurali in `/lang/{locale}/messages.php`.
- Nei Blade, sostituire blocchi condizionali con `trans_choice()` o `@choice()`.
- Evitare l'uso del JSON per le stringhe plurali.

## Processo Dev → Traduttore: Istruzioni e Modifiche Proposte

1. **Preparazione**: Prepara i file PHP/JSON di riferimento in `/lang/en/` e `/lang/en.json`.
2. **Istruzioni per i Traduttori**:
   - Nei file PHP: traduci solo il testo a destra di `=>`, non cambiare chiavi o struttura.
   - Nei file JSON: traduci solo il valore, non la chiave.
   - Non aggiungere, rimuovere o spostare chiavi.
   - Se serve un apostrofo (`'`), anteporre `\`.
3. **Reintegrazione**: Sostituisci i file tradotti nella lingua target e verifica la sintassi.
4. **Modifiche Proposte**:
   - Nei Blade, sostituire tutte le stringhe hardcoded con chiavi strutturate.
   - Nei file PHP, uniformare la struttura e aggiungere commenti per i traduttori.
   - Versionare i file di traduzione separatamente.

## Conclusione

Implementare un sistema di traduzione per testi statici in un progetto multi-modulo migliorerà l'accessibilità e l'esperienza utente per utenti di diverse lingue. L'approccio con file PHP è raccomandato per la maggior parte delle traduzioni a causa della sua flessibilità e organizzazione, mentre i file JSON possono essere utilizzati per testi più lunghi o frasi complete. Le modifiche proposte ai file Blade, ai file di traduzione e alle route garantiranno che il sistema di localizzazione sia robusto e conforme alle regole del progetto, come l'uso del prefisso della lingua negli URL.

## Risorse

- Corso Laravel Daily: [Multi-Language Laravel 11: All You Need to Know](https://laraveldaily.com/course/multi-language-laravel)