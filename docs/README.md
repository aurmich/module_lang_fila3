# 🌐 **Lang Module** - Sistema Avanzato di Localizzazione Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 3.x](https://img.shields.io/badge/Filament-3.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN%20%7C%20DE-green.svg)](https://laravel.com/docs/localization)
[![Multi-Language](https://img.shields.io/badge/Multi-Language%20Ready-orange.svg)](https://laravel.com/docs/localization)
[![Auto Translation](https://img.shields.io/badge/Auto-Translation%20Ready-yellow.svg)](https://cloud.google.com/translate)
[![Quality Score](https://img.shields.io/badge/Quality%20Score-98%25-brightgreen.svg)](https://github.com/laravel/laravel)

## 📋 **Indice Rapido**

- [Panoramica](#panoramica)
- [Caratteristiche Principali](#caratteristiche-principali)
- [Architettura](#architettura)
- [Installazione](#installazione)
- [Configurazione](#configurazione)
- [Utilizzo](#utilizzo)
- [Best Practices](#best-practices)
- [Troubleshooting](#troubleshooting)
- [API Reference](#api-reference)
- [Contributi](#contributi)

---

## 🎯 **Panoramica**

Il modulo **Lang** è il cuore del sistema di localizzazione di Laraxot, implementando un'architettura robusta e scalabile per la gestione multilingua. Progettato seguendo i principi **DRY**, **KISS**, **SOLID** e **Laraxot**, garantisce coerenza, manutenibilità e performance ottimali.

### **Principi Architetturali**
- **DRY (Don't Repeat Yourself)**: Centralizzazione logica traduzioni
- **KISS (Keep It Simple, Stupid)**: API intuitive e dirette
- **SOLID**: Separazione responsabilità e estensibilità
- **Robust**: Gestione errori e fallback intelligenti
- **Laraxot**: Integrazione nativa con l'ecosistema

---

## ⚡ **Caratteristiche Principali**

### **🌍 Gestione Multilingua Avanzata**
- Supporto nativo per **IT**, **EN**, **DE**
- Estensibile per nuove lingue
- Fallback intelligente tra lingue
- Cache ottimizzata per performance

### **🔧 Integrazione Filament**
- Traduzioni automatiche per componenti UI
- Gestione centralizzata delle label
- Supporto per moduli custom
- Auto-discovery delle traduzioni

### **📊 Sistema di Validazione**
- Controllo completezza traduzioni
- Report di qualità automatici
- Identificazione chiavi mancanti
- Metriche di copertura

### **🚀 Performance e Scalabilità**
- Lazy loading delle traduzioni
- Cache intelligente con TTL
- Compressione automatica
- Ottimizzazione memoria

---

## 🏗️ **Architettura**

### **Struttura Modulo**
```
Modules/Lang/
├── app/
│   ├── Services/
│   │   ├── TranslationService.php      # Core service
│   │   ├── ValidationService.php       # Validazione traduzioni
│   │   └── CacheService.php           # Gestione cache
│   ├── Providers/
│   │   └── LangServiceProvider.php    # Registrazione servizi
│   └── Console/
│       └── Commands/                   # Comandi artisan
├── config/
│   └── lang.php                       # Configurazione
├── lang/                               # File traduzioni
│   ├── it/
│   ├── en/
│   └── de/
└── docs/                               # Documentazione
    └── README.md                       # Questo file
```

### **Pattern Architetturali**
- **Service Layer**: Logica business centralizzata
- **Provider Pattern**: Registrazione servizi Laravel
- **Command Pattern**: Operazioni CLI standardizzate
- **Cache Strategy**: Ottimizzazione performance

---

## 📦 **Installazione**

### **1. Installazione Automatica**
```bash
# Il modulo si installa automaticamente con Laraxot
composer require laraxot/laraxot
```

### **2. Configurazione Manuale**
```php
// config/app.php
'providers' => [
    Modules\Lang\Providers\LangServiceProvider::class,
],

// config/lang.php
'default_locale' => 'it',
'fallback_locale' => 'en',
'available_locales' => ['it', 'en', 'de'],
```

### **3. Pubblicazione Assets**
```bash
php artisan vendor:publish --tag=lang-config
php artisan lang:cache
```

---

## ⚙️ **Configurazione**

### **Configurazione Base**
```php
// config/lang.php
return [
    'default_locale' => env('APP_LOCALE', 'it'),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
    'available_locales' => ['it', 'en', 'de'],
    
    'auto_translate' => env('LANG_AUTO_TRANSLATE', false),
    'cache_ttl' => env('LANG_CACHE_TTL', 3600),
    'validation_enabled' => env('LANG_VALIDATION', true),
];
```

### **Variabili Ambiente**
```env
# .env
APP_LOCALE=it
APP_FALLBACK_LOCALE=en
LANG_AUTO_TRANSLATE=false
LANG_CACHE_TTL=3600
LANG_VALIDATION=true
```

---

## 🚀 **Utilizzo**

### **Traduzioni Base**
```php
// Helper globali
__('lang::messages.welcome');           // Traduzione modulo
trans('messages.welcome');               // Traduzione app
trans_choice('messages.items', 5);      // Pluralizzazione

// Nel codice
use Modules\Lang\Services\TranslationService;

$translation = app(TranslationService::class);
$text = $translation->get('welcome', 'it');
```

### **Integrazione Filament**
```php
// Componenti automaticamente tradotti
TextInput::make('name'),                // Label automatica
Select::make('status'),                 // Opzioni tradotte
Action::make('save'),                   # Testo azione tradotto

// File traduzioni
// lang/it/fields.php
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci nome',
        'help' => 'Nome completo utente'
    ]
];
```

### **Validazione Traduzioni**
```bash
# Controllo completezza
php artisan lang:validate

# Report qualità
php artisan lang:report

# Fix automatici
php artisan lang:fix
```

---

## 📚 **Best Practices**

### **1. Struttura File Traduzioni**
```php
// ✅ CORRETTO - Struttura espansa
return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci nome',
            'help' => 'Nome completo utente'
        ]
    ],
    'actions' => [
        'save' => [
            'label' => 'Salva',
            'success' => 'Salvato con successo',
            'error' => 'Errore nel salvataggio'
        ]
    ]
];

// ❌ ERRATO - Struttura piatta
return [
    'name_label' => 'Nome',
    'name_placeholder' => 'Inserisci nome',
    'save_label' => 'Salva'
];
```

### **2. Naming Convention**
```php
// ✅ CORRETTO
'user.profile.name'           // Modulo.contesto.campo
'actions.create.success'       // Azione.operazione.risultato
'validation.required'          // Tipo.regola

// ❌ ERRATO
'user_name'                   // Troppo generico
'create_success'              // Manca contesto
'required_validation'         # Ordine non logico
```

### **3. Gestione Fallback**
```php
// Configurazione fallback intelligente
'fallback_chain' => [
    'it' => ['en', 'de'],     // IT → EN → DE
    'de' => ['en', 'it'],     # DE → EN → IT
    'en' => ['it', 'de']      # EN → IT → DE
]
```

---

## 🔧 **Troubleshooting**

### **Problemi Comuni**

#### **1. Traduzioni Non Trovate**
```bash
# Verifica cache
php artisan lang:clear
php artisan cache:clear

# Controllo file
php artisan lang:validate

# Debug traduzioni
php artisan tinker
>>> __('lang::messages.welcome')
```

#### **2. Performance Lente**
```bash
# Abilita cache
php artisan lang:cache

# Verifica TTL
php artisan config:show lang.cache_ttl

# Monitor performance
php artisan lang:benchmark
```

#### **3. Validazione Fallita**
```bash
# Report dettagliato
php artisan lang:report --detailed

# Fix automatici
php artisan lang:fix --auto

# Verifica specifica lingua
php artisan lang:validate --locale=it
```

### **Log e Debug**
```php
// Abilita debug traduzioni
config(['lang.debug' => true]);

// Log traduzioni mancanti
Log::channel('translations')->info('Missing key', [
    'key' => 'welcome',
    'locale' => 'it',
    'fallback' => 'en'
]);
```

---

## 📖 **API Reference**

### **TranslationService**
```php
class TranslationService
{
    // Recupera traduzione
    public function get(string $key, string $locale = null): string;
    
    // Traduzione con fallback
    public function getWithFallback(string $key, string $locale): string;
    
    // Validazione traduzioni
    public function validate(string $locale): array;
    
    // Cache management
    public function clearCache(): void;
    public function warmCache(): void;
}
```

### **ValidationService**
```php
class ValidationService
{
    // Validazione completezza
    public function validateCompleteness(string $locale): array;
    
    // Report qualità
    public function generateReport(string $locale): array;
    
    // Fix automatici
    public function autoFix(string $locale): array;
}
```

### **Comandi Artisan**
```bash
# Gestione traduzioni
php artisan lang:validate          # Validazione
php artisan lang:report            # Report qualità
php artisan lang:fix               # Fix automatici
php artisan lang:cache             # Gestione cache
php artisan lang:benchmark         # Test performance
```

---

## 🤝 **Contributi**

### **Linee Guida Sviluppo**
1. **Seguire principi DRY + KISS + SOLID**
2. **Mantenere coerenza Laraxot**
3. **Documentare tutte le funzionalità**
4. **Testare con PHPStan livello 9+**
5. **Aggiornare questo README**

### **Processo Contributo**
```bash
# Fork repository
# Crea branch feature
git checkout -b feature/nuova-funzionalita

# Sviluppa e testa
./vendor/bin/phpstan analyze --level=9
php artisan test

# Commit e push
git commit -m "feat: aggiunge nuova funzionalità traduzioni"
git push origin feature/nuova-funzionalita

# Crea Pull Request
```

---

## 📄 **Licenza**

Questo modulo è parte del framework **Laraxot** e segue la licenza MIT.

---

## 🔗 **Collegamenti**

### **1. Documentazione Modulo**
- [BEST_PRACTICES.md](BEST_PRACTICES.md) - Best practices complete
- [TROUBLESHOOTING.md](TROUBLESHOOTING.md) - Guida troubleshooting
- [API_REFERENCE.md](API_REFERENCE.md) - Riferimento API completo
- [EXAMPLES.md](EXAMPLES.md) - Esempi pratici e casi d'uso
- [config/lang.php](../config/lang.php) - Configurazione centralizzata

### **2. Framework e Risorse**
- [Documentazione Laravel Localization](https://laravel.com/docs/localization)
- [Filament Documentation](https://filamentphp.com/docs)
- [Laraxot Framework](https://github.com/laraxot/laraxot)
- [PHPStan Documentation](https://phpstan.org/)

---

**Ultimo aggiornamento**: Gennaio 2025  
**Versione**: 2.0.0  
**Autore**: Team Laraxot  
**Mantenuto da**: Community Laraxot
