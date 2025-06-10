# Regole per le Chiavi di Traduzione 

## Collegamenti correlati
- [Documentazione centrale](./README.md)
- [Collegamenti documentazione](./collegamenti-documentazione.md)
- [Implementazione Auth Pages](../../User/docs/AUTH_PAGES_IMPLEMENTATION.md)
- [Regole Traduzioni User](../../User/docs/TRANSLATION_KEYS_RULES.md)
- [Documentazione Lang](./README.md)

## Regole Fondamentali per le Traduzioni

### 1. Struttura delle Chiavi di Traduzione

Le chiavi di traduzione  devono seguire una struttura gerarchica espansa:

```php
// Corretto
'auth' => [
    'login' => [
        'button' => [
            'label' => 'Login',
        ],
    ],
],

// Errato
'auth.login.button.label' => 'Login',
```

### 2. Convenzioni di Naming

Le chiavi di traduzione devono seguire il formato:
```
modulo::risorsa.fields.campo.label
```

Esempi:
- `user::auth.login.button.label`
- `dental::appointment.fields.date.label`
- `cms::page.fields.title.label`

### 3. Divieto di Chiavi in Italiano

**MAI utilizzare chiavi di traduzione in italiano**:

```php
// Errato
__('Accedi')
__('Registrati')
__('Esci')

// Corretto
__('auth.login.button.label')
__('auth.register.button.label')
__('auth.logout.button.label')
```

### 4. Divieto di Utilizzo del Metodo `->label()`

**MAI utilizzare il metodo `->label()` nei componenti Filament**:

```php
// Errato
TextInput::make('name')
    ->label('Nome')

// Corretto
TextInput::make('name')
// Il label viene gestito automaticamente dal LangServiceProvider
```

### 5. Gestione Automatica delle Etichette

Le etichette sono gestite automaticamente dal `LangServiceProvider` utilizzando la convenzione:

```
modulo::risorsa.fields.campo.label
```

### 6. Organizzazione dei File di Traduzione

I file di traduzione devono essere organizzati per modulo e risorsa:

```
/Modules/Lang/resources/lang/
├── it/
│   ├── auth.php
│   ├── user.php
│   ├── dental.php
│   └── ...
└── en/
    ├── auth.php
    ├── user.php
    ├── dental.php
    └── ...
```

## Best Practices

- Utilizza nomi di chiavi chiari e coerenti tra i moduli
- Documenta le eccezioni e le regole specifiche per ogni modulo
- Mantieni la struttura delle chiavi stabile nel tempo

## Conclusione

Seguendo queste regole, le traduzioni restano modulari, riutilizzabili e compatibili con qualsiasi progetto, senza riferimenti a domini specifici.
