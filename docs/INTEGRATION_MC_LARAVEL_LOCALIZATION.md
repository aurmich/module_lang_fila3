# Integrazione di mcamara/laravel-localization

Questo documento descrive come integrare e configurare il pacchetto `mcamara/laravel-localization` in un progetto Laravel multi-modulo.

## Obiettivo

Fornire un sistema di localizzazione flessibile e riutilizzabile, senza riferimenti a domini o progetti specifici.

## Passaggi di Integrazione

1. **Installazione del Pacchetto**
   ```bash
   composer require mcamara/laravel-localization
   ```
2. **Pubblicazione della Configurazione**
   ```bash
   php artisan vendor:publish --provider="Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider"
   ```
3. **Configurazione delle Lingue**
   Modificare il file `config/laravellocalization.php` per aggiungere le lingue desiderate.
4. **Utilizzo dei Middleware**
   Aggiungere i middleware forniti dal pacchetto alle rotte che richiedono la localizzazione.
5. **Generazione degli URL Localizzati**
   Utilizzare i metodi del pacchetto per generare URL localizzati nei template Blade e nei controller.

## Esempio di Utilizzo nei Blade

```blade
<a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route('home')) }}">
    <img src="{{ asset('images/logos/project-logo.svg') }}" alt="ProjectName">
</a>
```

## Best Practices

- Non inserire riferimenti a nomi di progetto nei path o nei commenti
- Organizzare le risorse localizzate in `/images/localized/{locale}/...`
- Documentare le eccezioni e le personalizzazioni

## Conclusione

Seguendo queste linee guida, la localizzazione sarà facilmente integrabile e riutilizzabile in qualsiasi progetto Laravel multi-modulo.
