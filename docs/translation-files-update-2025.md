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