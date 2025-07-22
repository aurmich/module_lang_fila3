# Struttura corretta per i file di traduzione nel modulo Lang

<<<<<<< HEAD
## Aggiornamento luglio 2025: eliminazione di translation_file.php

A partire da luglio 2025, il file `translation_file.php` è stato ELIMINATO dal percorso `/Modules/Lang/lang/it/` perché:
- Non rispettava la struttura moderna e le best practice Laraxot
- Era un duplicato/confusione rispetto a `lang_service.php`
- Tutte le traduzioni generiche e di servizio sono ora centralizzate in `lang_service.php` (e corrispettivi in altre lingue)

## Regole attuali
- Usare SEMPRE la sintassi breve degli array `[]` e `declare(strict_types=1);`
- Un solo file per contesto: evitare duplicati come `translation_file.php`
- Struttura espansa: ogni campo deve avere `label`, `placeholder`, `help`; ogni azione deve avere almeno `label`, `success`, `error`
- Chiavi in inglese, valori tradotti
- Tutte le traduzioni di servizio e gestione lingua vanno in `lang_service.php`

## Esempio di struttura corretta

```php
<?php

declare(strict_types=1);

return [
    'fields' => [
        'language' => [
            'label' => 'Lingua',
            'placeholder' => 'Seleziona la lingua',
            'help' => 'Lingua attualmente selezionata per l\'interfaccia',
        ],
        'available_languages' => [
            'label' => 'Lingue Disponibili',
            'placeholder' => 'Elenco lingue',
            'help' => 'Lingue disponibili per la selezione',
        ],
    ],
    'actions' => [
        'change_language' => [
            'label' => 'Cambia Lingua',
            'success' => 'Lingua cambiata con successo',
            'error' => 'Errore durante il cambio lingua',
        ],
    ],
    'messages' => [
        'language_changed' => 'Lingua cambiata correttamente',
        'error' => 'Si è verificato un errore durante il cambio lingua',
    ],
    'validation' => [
        'language_required' => 'La lingua è obbligatoria',
        'language_valid' => 'La lingua selezionata non è valida',
    ],
];
```

## Note operative
- Se servono nuove chiavi generiche, aggiungerle a `lang_service.php` e ai corrispettivi in altre lingue
- Validare sempre la sintassi con `php -l`
- Aggiornare la documentazione ogni volta che si modifica la struttura delle traduzioni

## Collegamenti
- [translation-files-update-2025.md](./translation-files-update-2025.md)
- [translation-standards.md](./translation-standards.md)
- [translation_keys_best_practices.md](./translation_keys_best_practices.md)
- [errori-comuni-traduzione.md](./errori-comuni-traduzione.md)

*Ultimo aggiornamento: luglio 2025*
=======
## Percorsi standard per i file di traduzione

I file di traduzione nel modulo Lang devono seguire una struttura precisa dei percorsi per evitare duplicazioni e conflitti:

```
/Modules/Lang/lang/{locale}/{file}.php
```

### Percorsi corretti
- ✅ `/Modules/Lang/lang/it/lang_service.php`
- ✅ `/Modules/Lang/lang/en/lang_service.php`

### Percorsi errati da evitare
- ❌ `/Modules/Lang/lang/lang/it/lang_service.php` (doppia cartella `lang`)
- ❌ `/Modules/Lang/resources/lang/it/lang_service.php` (percorso obsoleto)

## Anti-pattern comuni da evitare

1. **Duplicazione di file di traduzione**
   ```
   /Modules/Lang/lang/it/lang_service.php
   /Modules/Lang/lang/lang/it/lang_service.php  # Duplicato con percorso errato
   ```
   Questo causa conflitti durante il caricamento delle traduzioni e può portare a errori di sintassi difficili da tracciare.

2. **Incongruenze di struttura tra file di traduzione**
   ```php
   // File 1: Sintassi breve
   return [
       'key' => 'value',
   ];
   
   // File 2: Sintassi vecchia
   return array(
       'key' => 'value',
   );
   ```
   Utilizzare sempre la stessa sintassi in tutti i file di traduzione per garantire coerenza.

3. **Cartelle di traduzione duplicate**
   ```
   /Modules/Lang/lang/it/
   /Modules/Lang/resources/lang/it/  # Evitare questa duplicazione
   ```
   Mantenere una sola posizione per le traduzioni di ciascuna lingua.

## Regole di manutenzione

1. **Correggere percorsi duplicati**
   - Identificare file duplicati attraverso script di scansione
   - Rimuovere le copie superflue mantenendo solo quelle nel percorso standard
   - Documentare ogni rimozione per tracciabilità

2. **Unificare file di traduzione frammentati**
   - Se esistono più file parziali per lo stesso contesto, unificarli
   - Seguire la struttura gerarchica standard (navigation, fields, actions, ecc.)

3. **Ripulire la cache dopo modifiche**
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan view:clear
   ```

## Verifiche periodiche

1. Eseguire controlli sintattici regolari:
   ```bash
   find Modules/Lang/lang -name "*.php" -exec php -l {} \;
   ```

2. Verificare l'assenza di percorsi duplicati:
   ```bash
   find Modules/Lang -path "*/lang/lang/*" -type f
   ```

## Collegamenti alla documentazione correlata

- [Regole generali per i file di traduzione](/laravel/Modules/Xot/docs/translation_rules.md)
- [Errori comuni nei file di traduzione](/laravel/Modules/Lang/docs/errori_comuni_traduzione.md)
- [Documentazione principale sulle traduzioni](/docs/translation_rules.md)

*Ultimo aggiornamento: 3 Giugno 2025*
>>>>>>> e3660f5 (.)
