# Gestione delle Lingue (Locales) in Laravel

## Introduzione

In Laravel, la gestione delle lingue (locales) è fondamentale per determinare quale lingua utilizzare per le traduzioni. Ogni progetto Laravel ha una lingua predefinita e una di fallback. Questa documentazione, basata sul corso di Laravel Daily, esplora come configurare queste impostazioni in un'applicazione Laravel.

## Configurazione della Lingua Predefinita

Per impostare la lingua predefinita dell'applicazione, modificare il file `config/app.php`:

```php
'locale' => 'it',
// Deve corrispondere al nome della cartella in `lang/FOLDER` o al nome del file `lang/KEY.json`.
```

Questa sarà la lingua predefinita per tutti gli utenti dell'applicazione. È importante non lasciare il valore predefinito 'en' se l'applicazione è destinata a un pubblico con una lingua diversa.

## Configurazione della Lingua di Fallback

La lingua di fallback viene utilizzata quando una traduzione non è disponibile nella lingua predefinita. Configurarla in `config/app.php`:

```php
'fallback_locale' => 'en',
```

Quando una traduzione manca nella lingua predefinita, Laravel cercherà la traduzione nella lingua di fallback. Ad esempio, se la lingua predefinita è 'it' e manca una traduzione per 'register', Laravel utilizzerà la traduzione da `lang/en/auth.php`:

```php
return [
    // ...
    'register' => 'Registration',
];
```

Questo evita di mostrare agli utenti la chiave di traduzione non tradotta.

## Limitazioni delle Traduzioni JSON con Fallback

Le traduzioni basate su file JSON non funzionano con il fallback nello stesso modo dei file PHP. Se una traduzione manca nel file JSON della lingua predefinita, Laravel non cercherà nel file JSON della lingua di fallback, ma mostrerà direttamente la chiave di traduzione.

Ad esempio, con:
- Lingua predefinita: 'it'
- Lingua di fallback: 'en'
- Traduzione in `lang/en.json`:
  ```json
  {
      "Register": "Registration"
  }
  ```

Se la traduzione per 'Register' manca in `lang/it.json`, l'output sarà "Register" invece di "Registration".

Questo è un comportamento diverso rispetto ai file PHP, dove il fallback funziona correttamente.

## Impostazione Dinamica della Lingua

Per consentire agli utenti di cambiare lingua, è necessario implementare un meccanismo per impostare dinamicamente la lingua. Ci sono diversi approcci:

### 1. Middleware Personalizzato

```php
// app/Http/Middleware/SetLocale.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        
        return $next($request);
    }
}
```

Registrare il middleware in `app/Http/Kernel.php`:

```php
protected $middlewareGroups = [
    'web' => [
        // ...
        \App\Http\Middleware\SetLocale::class,
    ],
];
```

### 2. Pacchetto mcamara/laravel-localization

Per una gestione più avanzata, utilizzare il pacchetto `mcamara/laravel-localization`:

```bash
composer require mcamara/laravel-localization
```

Pubblicare la configurazione:

```bash
php artisan vendor:publish --provider="Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider"
```

Configurare le lingue supportate in `config/laravellocalization.php`:

```php
'supportedLocales' => [
    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English'],
    'it' => ['name' => 'Italian', 'script' => 'Latn', 'native' => 'Italiano'],
],
```

Utilizzare il middleware per le route:

```php
// routes/web.php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {
    // Route localizzate
    Route::get('/', function () {
        return view('welcome');
    });
});
```

Aggiungere selettore di lingua nella vista:

```blade
<ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</ul>
```

## Analisi e Ragionamento

Considerando le regole di localizzazione standard che richiedono il prefisso della lingua negli URL (`/{locale}/{sezione}/{risorsa}`), è essenziale configurare correttamente la lingua predefinita e di fallback. Si consiglia di impostare 'it' (italiano) come lingua predefinita, che è probabilmente la lingua principale per la maggior parte degli utenti. La lingua di fallback sarà 'en' (inglese) per garantire che ci sia sempre una traduzione disponibile, anche se non perfetta.

Inoltre, data la limitazione del fallback con i file JSON, si raccomanda di utilizzare principalmente file PHP per le traduzioni strutturate. I file JSON possono essere utilizzati per testi più lunghi, ma con la consapevolezza che il fallback non funzionerà come previsto.

Per l'impostazione dinamica della lingua, si suggerisce di integrare questa logica con il pacchetto `mcamara/laravel-localization`, che gestisce il cambio di lingua tramite middleware, allineandosi con le migliori pratiche.

## Implementazione Pratica

Di seguito elenco i file che modificherei e le modifiche specifiche che apporterei per implementare la gestione delle lingue:

1. **Configurazione della Lingua Predefinita e di Fallback**:
   - File: `config/app.php`
   - Modifica:
     ```php
     'locale' => 'it',
     'fallback_locale' => 'en',
     'available_locales' => ['it', 'en'], // Aggiungi questa riga
     ```
   - **Ragionamento**: Impostare 'it' come lingua predefinita riflette il pubblico principale. 'en' come fallback garantisce che ci sia una traduzione di riserva, migliorando l'esperienza utente rispetto alla visualizzazione di chiavi non tradotte.

2. **Configurazione del Pacchetto mcamara/laravel-localization**:
   - File: `config/laravellocalization.php`
   - Modifica:
     ```php
     'supportedLocales' => [
         'it' => ['name' => 'Italian', 'script' => 'Latn', 'native' => 'Italiano'],
         'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English'],
     ],
     'useAcceptLanguageHeader' => true,
     'hideDefaultLocaleInURL' => false,
     ```
   - **Ragionamento**: Definire chiaramente le lingue supportate garantisce che il pacchetto `mcamara/laravel-localization` possa gestire correttamente i cambi di lingua. Mantenere `hideDefaultLocaleInURL` su `false` è coerente con la regola del progetto di includere sempre il prefisso della lingua negli URL.

3. **Configurazione delle Route con Prefisso Lingua**:
   - File: `routes/web.php`
   - Modifica:
     ```php
     use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
     
     Route::group([
         'prefix' => LaravelLocalization::setLocale(),
         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
     ], function () {
         // Tutte le route localizzate qui
         Route::get('/', 'HomeController@index')->name('home');
         // ...
     });
     ```
   - **Ragionamento**: Raggruppare tutte le route sotto il prefisso della lingua predefinita nell'URL (opzionale)

4. **Uso di File PHP per Traduzioni Strutturate**:
   - Continuare a utilizzare file PHP per traduzioni strutturate, come raccomandato in `Modules/Lang/docs/static-text-translation.md`.
   - Esempio di file in `lang/it/auth.php`:
     ```php
     return [
         'register' => [
             'name' => 'Nome',
             'email' => 'Email',
             'password' => 'Password',
             // ...
         ],
         // Commento: Traduzioni per messaggi di errore
         'failed' => 'Queste credenziali non corrispondono ai nostri record.',
     ];
     ```
   - **Ragionamento**: I file PHP offrono un fallback funzionante, essenziale per evitare di mostrare chiavi non tradotte agli utenti. La struttura modulare si adatta bene all'organizzazione del progetto.

## Conclusione

La gestione delle lingue in Laravel richiede una configurazione attenta della lingua predefinita e di fallback, tenendo conto delle limitazioni dei file JSON rispetto ai file PHP. Impostare 'it' come lingua predefinita e 'en' come fallback, insieme all'uso del pacchetto `mcamara/laravel-localization` per l'impostazione dinamica della lingua, garantirà un'esperienza utente coerente. Le modifiche proposte ai file di configurazione e alle route implementano queste best practices, migliorando l'accessibilità multilingue dell'applicazione.

## Risorse

- Corso Laravel Daily: [Multi-Language Laravel 11: All You Need to Know](https://laraveldaily.com/course/multi-language-laravel)