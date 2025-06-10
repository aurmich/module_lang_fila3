# Gestione delle Lingue

Questo documento fornisce una panoramica completa sulla gestione delle lingue in Laravel, con particolare attenzione alle esigenze di progetti multi-modulo e multi-lingua.

## Struttura dei File di Lingua

- I file di lingua devono essere organizzati per modulo e per lingua
- Utilizzare nomi e path generici, senza riferimenti a progetti specifici

## Best Practices

- Mantenere la coerenza delle chiavi tra i moduli
- Utilizzare strumenti automatici per l’estrazione e la verifica delle chiavi
- Documentare eventuali eccezioni

## Esempio di Path

```
/Modules/<NomeModulo>/resources/lang/it/auth.php
/Modules/<NomeModulo>/resources/lang/en/auth.php
```

## Testing

- Testare la presenza di tutte le chiavi necessarie in ogni lingua
- Utilizzare fallback solo dove strettamente necessario

## Conclusione

Seguendo queste regole, la gestione delle lingue sarà scalabile, manutenibile e riutilizzabile in ogni contesto.