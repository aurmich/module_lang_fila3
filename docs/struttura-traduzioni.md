# Struttura corretta per i file di traduzione nel modulo Lang

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