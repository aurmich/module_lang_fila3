# Aggiornamento File di Traduzione - Luglio 2025

## Novità
- Eliminato `translation_file.php` da `/Modules/Lang/lang/it/` e `/en/` perché obsoleto e non conforme alle regole Laraxot
- Tutte le traduzioni di servizio sono ora centralizzate in `lang_service.php` (e corrispettivi in altre lingue)
- Aggiornata la documentazione in `struttura-traduzioni.md` con esempio e motivazione

## Motivazione
- Evitare duplicazioni/confusione tra file simili
- Garantire struttura coerente, tipizzata e validata
- Seguire le best practice: chiavi in inglese, valori tradotti, sintassi moderna, un solo file per contesto

## Cosa fare ora
- Usare solo `lang_service.php` per tutte le traduzioni di servizio/gestione lingua
- Se servono nuove chiavi, aggiungerle lì e tradurle in tutte le lingue
- Validare sempre la sintassi con `php -l`
- Aggiornare la doc ogni volta che si modifica la struttura delle traduzioni

## Collegamenti
- [struttura-traduzioni.md](./struttura-traduzioni.md)
- [translation-standards.md](./translation-standards.md)
- [translation_keys_best_practices.md](./translation_keys_best_practices.md)

*Ultimo aggiornamento: luglio 2025*

## Struttura Standard Adottata
```php
<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Etichetta',
        'group' => 'Gruppo',
        'icon' => 'heroicon-o-icon',
        'sort' => 50,
    ],
    'fields' => [
        'field_name' => [
            'label' => 'Etichetta Campo',
            'placeholder' => 'Testo segnaposto',
            'help' => 'Testo di aiuto dettagliato',
        ],
    ],
    'actions' => [
        'action_name' => [
            'label' => 'Etichetta Azione',
            'success' => 'Messaggio di successo',
            'error' => 'Messaggio di errore',
            'tooltip' => 'Tooltip informativo',
        ],
    ],
    'messages' => [
        'key' => 'Messaggio utente',
    ],
    'validation' => [
        'rule' => 'Messaggio di validazione',
    ],
];
```

## ⚠️ Regola fondamentale: Non rimuovere mai chiavi dalle traduzioni

Quando si lavora sui file di traduzione, non è mai consentito rimuovere chiavi esistenti, ma solo aggiungere nuove chiavi o migliorare i valori e la struttura. Questa regola è prioritaria e va sempre rispettata in ogni intervento di refactoring o miglioramento delle traduzioni.

### Checklist finale
- [x] Nessuna chiave rimossa dai file di traduzione
