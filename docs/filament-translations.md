# Regole per le Traduzioni in Filament

> **Regola fondamentale:** MAI utilizzare il metodo `->label()` nei componenti Filament, specialmente nei Blocks. Le etichette sono gestite automaticamente dal LangServiceProvider.

<<<<<<< HEAD
=======
# ⚠️ Regola fondamentale: MAI usare chiavi che terminano con `.navigation` nei file di traduzione

- Usa sempre la struttura array per navigation:
  ```php
  'navigation' => [
      'label' => 'Gestione Utenti',
      'group' => 'Utenti',
      'icon' => 'heroicon-o-user-group',
      'color' => 'primary',
  ],
  ```
- **Esempio ERRATO:**
  ```php
  'group' => 'user.navigation',
  'label' => 'user.navigation',
  ```
- Consulta anche:
  - [translation_keys_best_practices.md](../translation_keys_best_practices.md)
  - [translation_keys_rules.md](../translation_keys_rules.md)
  - [documentazione sulle traduzioni](../translations.md)

>>>>>>> a0a7988 (📝 docs: update language switching documentation to improve clarity and consistency across multi-language applications)
## Struttura Corretta per le Traduzioni

Le traduzioni in Filament devono seguire questa struttura nei file di traduzione:

```php
// File: /Modules/<NomeModulo>/lang/<lingua>/<risorsa>.php
return [
    'fields' => [
        'nome_campo' => [
            'label' => 'Etichetta Campo',
            'help' => 'Testo di aiuto',
            'placeholder' => 'Placeholder',
        ],
    ],
    'actions' => [
        'nome_azione' => [
            'label' => 'Etichetta Azione',
        ],
    ],
    'sections' => [
        'nome_sezione' => [
            'label' => 'Etichetta Sezione',
            'description' => 'Descrizione Sezione',
        ],
    ],
];
```

## Come Funziona il LangServiceProvider

Il `LangServiceProvider` registra automaticamente un sistema che intercetta la creazione dei componenti Filament e assegna le etichette basandosi sui file di traduzione, senza bisogno di chiamare manualmente `->label()`.

```php
// Esempio di come il LangServiceProvider gestisce le etichette
// Questo avviene automaticamente, NON devi farlo tu
$component = app(AutoLabelComponent::class);
```

## Best Practices

1. **Utilizzo nei Template Blade**

   ```blade
   <img src="{{ asset('images/default-avatar.svg') }}" alt="Avatar utente">
   ```

   > **Nota**: La funzione `asset()` punta automaticamente alla directory pubblica corretta.

2. **Generazione di URL per Risorse Pubbliche**

   ```php
   $avatarUrl = asset('images/default-avatar.svg');
   ```

3. **Risorse Localizzate**

   Per risorse che variano in base alla lingua, utilizzare la struttura:

   ```
   /public_html/images/localized/{locale}/image.svg
   ```

   E accedervi con:

   ```php
   $localizedImage = asset('images/localized/' . LaravelLocalization::getCurrentLocale() . '/image.svg');
   ```

4. **Versionamento delle Risorse**

   Per gestire la cache del browser, aggiungere un parametro di versione:

   ```php
   $cssWithVersion = asset('css/app.css') . '?v=' . config('app.version');
   ```

5. **SVG vs Raster**

   - Preferire SVG per icone, loghi e illustrazioni vettoriali
   - Utilizzare WebP o JPEG ottimizzati per fotografie
   - Fornire fallback per browser più vecchi

## Esempi di Utilizzo

### Avatar Utente

```blade
<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
    class="h-10 w-10 rounded-full"
>
```

### Logo nell'Header

```blade
<a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route('home')) }}">
    <img 
        src="{{ asset('images/logos/project-logo.svg') }}" 
        alt="ProjectName" 
        class="h-8"
    >
</a>
```

### CSS e JavaScript

```blade
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
```

## Conclusione

<<<<<<< HEAD
- [Convenzioni Namespace Filament](../../Cms/docs/convenzioni-namespace-filament.md) - Regole per i namespace e componenti Filament
- [Regole Generali](../../Xot/docs/README.md) - Best practice e linee guida generali

---

### Link Bidirezionale
Questo documento è linkato anche dalla documentazione del modulo Cms per garantire coerenza tra i moduli.

# ⚠️ Regola vincolante: MAI usare ->label() nei componenti Filament

- Tutte le label sono gestite tramite i file di traduzione del modulo.
- Consulta anche:
  - [docs SaluteOra](../../SaluteOra/docs/README.md)
  - [docs Xot](../../Xot/docs/README.md)

## Policy DRY sulle Traduzioni di Disponibilità/Appuntamenti

Tutte le label, placeholder, messaggi e azioni relativi a disponibilità e appuntamenti sono centralizzate nel file di traduzione appointment.php del modulo. Non vanno mai create label custom o tabelle custom per la disponibilità. Tutte le logiche di fetch, creazione, modifica, cancellazione sono centralizzate su Appointment.

### Motivazione filosofica, politica, zen
- Un solo punto di verità: nessuna duplicazione, nessun lock-in
- DRY, KISS, serenità del codice
- Refactoring sicuro, massima estendibilità
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto.
>>>>>>> a0a7988 (📝 docs: update language switching documentation to improve clarity and consistency across multi-language applications)
