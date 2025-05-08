# Best Practices per le Chiavi di Traduzione

## Collegamenti correlati
- [README modulo Lang](./README.md)
- [Convenzioni Path](./PATH_CONVENTIONS.md)
- [Collegamenti Documentazione](/docs/collegamenti-documentazione.md)
- [Implementazione Header](/laravel/Modules/User/docs/HEADER_LANGUAGE_AVATAR_IMPLEMENTATION.md)

## Panoramica

Questo documento descrive le best practices per l'utilizzo delle chiavi di traduzione in SaluteOra, con particolare attenzione alla struttura delle chiavi e all'evitare l'uso di stringhe in italiano come chiavi di traduzione.

## Regola Fondamentale: Mai Usare Chiavi in Italiano

### Problema

Un errore comune è utilizzare stringhe in italiano come chiavi di traduzione:

```php
<<<<<<< HEAD
// ERRATO
=======
// ❌ ERRATO
>>>>>>> 24b2438 (.)
{{ __('Accedi') }}
{{ __('Registrati') }}
{{ __('Profilo') }}
{{ __('Logout') }}
```

<<<<<<< HEAD
Questo approccio crea diversi problemi:
1. **Ambiguità**: La stessa parola italiana potrebbe avere significati diversi in contesti diversi
2. **Difficoltà di manutenzione**: Diventa difficile tracciare tutte le traduzioni
3. **Inconsistenza**: Diverse parti dell'applicazione potrebbero usare chiavi diverse per lo stesso concetto
4. **Problemi con altre lingue**: Quando si aggiunge una nuova lingua, è difficile sapere quali chiavi tradurre

=======
>>>>>>> 24b2438 (.)
### Soluzione Corretta

Utilizzare sempre chiavi strutturate in inglese, seguendo una convenzione precisa:

```php
<<<<<<< HEAD
// CORRETTO
=======
// ✅ CORRETTO
>>>>>>> 24b2438 (.)
{{ __('auth.login') }}
{{ __('auth.register') }}
{{ __('user.profile') }}
{{ __('auth.logout') }}
```

## Struttura delle Chiavi di Traduzione

### Formato Raccomandato

Le chiavi di traduzione devono seguire questo formato:

```
{modulo}.{contesto}.{elemento}[.{attributo}]
```

Esempi:
- `auth.login.submit_button`
- `user.profile.title`
- `common.actions.save`
- `common.messages.success`

### Struttura dei File di Traduzione

I file di traduzione devono essere organizzati in modo gerarchico:

```php
// resources/lang/it/auth.php
return [
    'login' => [
<<<<<<< HEAD
        'title' => 'Accedi al tuo account',
        'email_label' => 'Indirizzo email',
        'password_label' => 'Password',
        'remember_me' => 'Ricordami',
        'submit_button' => 'Accedi',
        'forgot_password' => 'Password dimenticata?',
        'register_link' => 'Non hai un account? Registrati'
    ],
    'register' => [
        'title' => 'Crea un nuovo account',
        'name_label' => 'Nome completo',
        'email_label' => 'Indirizzo email',
        'password_label' => 'Password',
        'password_confirmation_label' => 'Conferma password',
        'submit_button' => 'Registrati',
        'login_link' => 'Hai già un account? Accedi'
    ],
    'logout' => 'Disconnetti',
    'password' => [
        'reset' => [
            'title' => 'Reimposta la password',
            'submit_button' => 'Reimposta password'
        ],
        'email' => [
            'title' => 'Recupero password',
            'submit_button' => 'Invia link di recupero'
        ]
    ]
];

// resources/lang/en/auth.php
return [
    'login' => [
        'title' => 'Sign in to your account',
        'email_label' => 'Email address',
        'password_label' => 'Password',
        'remember_me' => 'Remember me',
        'submit_button' => 'Sign in',
        'forgot_password' => 'Forgot your password?',
        'register_link' => 'Don\'t have an account? Sign up'
    ],
    'register' => [
        'title' => 'Create a new account',
        'name_label' => 'Full name',
        'email_label' => 'Email address',
        'password_label' => 'Password',
        'password_confirmation_label' => 'Confirm password',
        'submit_button' => 'Sign up',
        'login_link' => 'Already have an account? Sign in'
    ],
    'logout' => 'Sign out',
    'password' => [
        'reset' => [
            'title' => 'Reset password',
            'submit_button' => 'Reset password'
        ],
        'email' => [
            'title' => 'Password recovery',
            'submit_button' => 'Send recovery link'
        ]
    ]
];
```

## Esempi Corretti vs. Errati

### Componenti UI

```php
// ERRATO
<button type="submit">{{ __('Salva') }}</button>

// CORRETTO
<button type="submit">{{ __('common.actions.save') }}</button>
```

### Form

```php
// ERRATO
<label>{{ __('Nome') }}</label>

// CORRETTO
<label>{{ __('user.profile.fields.name.label') }}</label>
```

### Messaggi

```php
// ERRATO
$message = __('Operazione completata con successo');

// CORRETTO
$message = __('common.messages.operation_successful');
```

## Implementazione nel Selettore di Lingua e Avatar Utente

Ecco come implementare correttamente le traduzioni nel componente dell'avatar utente:

```php
<a href="{{ '/' . app()->getLocale() . '/profile' }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
    {{ __('user.profile.link') }}
</a>

<a href="{{ '/' . app()->getLocale() . '/dashboard' }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
    {{ __('user.dashboard.link') }}
</a>

<form action="{{ '/' . app()->getLocale() . '/auth/logout' }}" method="post" class="border-t">
    @csrf
    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
        {{ __('auth.logout') }}
    </button>
</form>
```

E per i pulsanti di login/registrazione:

```php
<div class="flex items-center space-x-4">
    <a href="{{ '/' . app()->getLocale() . '/auth/login' }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">
        {{ __('auth.login.link') }}
    </a>
    <x-filament::button
        tag="a"
        href="{{ '/' . app()->getLocale() . '/auth/register' }}"
        size="sm"
    >
        {{ __('auth.register.link') }}
    </x-filament::button>
</div>
=======
        'title' => 'Accedi',
        'button' => [
            'label' => 'Accedi',
            'tooltip' => 'Clicca per accedere'
        ]
    ],
    'register' => [
        'title' => 'Registrati',
        'button' => [
            'label' => 'Registrati',
            'tooltip' => 'Clicca per registrarti'
        ]
    ],
    'logout' => [
        'title' => 'Esci',
        'button' => [
            'label' => 'Esci',
            'tooltip' => 'Clicca per uscire'
        ]
    ]
];
>>>>>>> 24b2438 (.)
```

## Vantaggi dell'Approccio Strutturato

1. **Manutenibilità**: Facile aggiungere nuove lingue e mantenere le traduzioni esistenti
2. **Coerenza**: Garantisce che lo stesso testo venga tradotto allo stesso modo in tutta l'applicazione
3. **Contestualizzazione**: Le chiavi strutturate forniscono contesto ai traduttori
4. **Automazione**: Facilita l'estrazione automatica delle chiavi di traduzione
5. **Prevenzione di duplicati**: Riduce la probabilità di traduzioni duplicate

## Strumenti per la Gestione delle Traduzioni

- **Laravel Lang**: Pacchetto che fornisce traduzioni predefinite per molte lingue
- **Laravel Translation Manager**: Interfaccia web per gestire le traduzioni
- **Laravel Translation Loader**: Carica le traduzioni da un database invece che da file

## Conclusione

Seguire queste best practices per le chiavi di traduzione garantirà un'applicazione più manutenibile, coerente e facile da tradurre in più lingue. Ricorda sempre di utilizzare chiavi strutturate in inglese e mai stringhe in italiano come chiavi di traduzione.
