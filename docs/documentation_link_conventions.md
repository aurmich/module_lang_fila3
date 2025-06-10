# Convenzioni per i Collegamenti nella Documentazione

Quando si creano collegamenti, considerare la struttura standard dei moduli del progetto:

- Utilizzare path relativi e nomi generici
- Evitare riferimenti a nomi di progetto o domini specifici
- Mantenere la coerenza tra i moduli

## Esempi di Collegamento

```markdown
- [Documentazione centrale](../../docs/README.md)
- [Regole di naming](translation_keys_rules.md)
- [Best practices di localizzazione](integration_mc_laravel_localization.md)
```

## Best Practices/<directory progetto>/
/<directory progetto>/
1. **Coerenza**: Rispetta gli standard di naming e struttura del progetto
2. **Riutilizzo**: I collegamenti devono funzionare in ogni contesto modulare
3. **Documentazione**: Aggiorna sempre i link se la struttura cambia

## Conclusione

Seguendo queste regole, la documentazione resterà neutrale e riutilizzabile in qualsiasi contesto.