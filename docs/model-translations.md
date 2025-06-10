# Model Translations in Multi-Module Applications

## Overview
In a multi-language application, translating model data such as content, user information, or service descriptions is critical for accessibility across different languages. This document outlines how to implement model translations without packages and explores package-based solutions for more complex needs.

## Approach 1: Manual Model Translations (Without Packages)

This approach involves creating separate tables for translatable content, ensuring full control over the database structure and translation logic.

### Database Structure
- **Base Table**: Stores non-translatable data (e.g., IDs, dates).
- **Translation Table**: Stores translatable fields linked to the base table by ID and locale.

Example for a `Service` model:
```php
// Migration for services table
Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->dateTime('created_at')->nullable();
    $table->softDeletes();
    $table->timestamps();
});

// Migration for service_translations table
Schema::create('service_translations', function (Blueprint $table) {
    $table->id();
    $table->foreignId('service_id')->constrained()->cascadeOnDelete();
    $table->string('locale');
    $table->string('name');
    $table->text('description');
    $table->softDeletes();
    $table->timestamps();
});
```

### Model Setup
- **Base Model**: Defines relationships and attribute accessors to fetch translations automatically based on the current locale.
- **Translation Model**: Manages the translated content.

```php
// Modules/Service/Models/Service.php
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    protected $with = ['defaultTranslation'];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->translation?->name ?? $this->defaultTranslation->name
        );
    }

    public function description(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->translation?->description ?? $this->defaultTranslation->description
        );
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ServiceTranslation::class);
    }

    public function translation(): HasOne
    {
        return $this->hasOne(ServiceTranslation::class)
            ->where('locale', app()->getLocale());
    }

    public function defaultTranslation(): HasOne
    {
        return $this->hasOne(ServiceTranslation::class)
            ->where('locale', config('app.fallback_locale'))
            ->withDefault();
    }
}

// Modules/Service/Models/ServiceTranslation.php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceTranslation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'service_id',
        'locale',
        'name',
        'description',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
```

### Controller Implementation
```php
// Modules/Service/Http/Controllers/ServiceController.php
public function store(Request $request)
{
    $service = Service::create();
    
    foreach (config('app.available_locales') as $locale) {
        $service->translations()->create([
            'locale' => $locale,
            'name' => $request->input("name.$locale"),
            'description' => $request->input("description.$locale"),
        ]);
    }
    
    return redirect()->route('services.index');
}
```

### Form Implementation
```blade
<!-- resources/views/services/create.blade.php -->
<form action="{{ route('services.store') }}" method="POST">
    @csrf
    
    @foreach(config('app.available_locales') as $locale)
        <div class="locale-section" data-locale="{{ $locale }}">
            <h3>{{ strtoupper($locale) }}</h3>
            
            <div class="form-group">
                <label for="name_{{ $locale }}">Name</label>
                <input type="text" name="name[{{ $locale }}]" id="name_{{ $locale }}">
            </div>
            
            <div class="form-group">
                <label for="description_{{ $locale }}">Description</label>
                <textarea name="description[{{ $locale }}]" id="description_{{ $locale }}"></textarea>
            </div>
        </div>
    @endforeach
    
    <button type="submit">Create Service</button>
</form>
```

## Approach 2: Package-Based Solutions

### Spatie Laravel Translatable
- **Purpose**: Simplifies model translations by storing translations in a JSON column.
- **Key Features**:
  - JSON-based storage for translations
  - Easy attribute access with current locale
  - Fallback locale support
- **Implementation**:
  ```bash
  composer require spatie/laravel-translatable
  ```
  Add the `HasTranslations` trait to models:
  ```php
  // Modules/Service/Models/Service.php
  use Spatie\Translatable\HasTranslations;
  class Service extends Model
  {
      use HasTranslations;
      public $translatable = ['name', 'description'];
  }
  ```
  Store translations:
  ```php
  $service = new Service();
  $service->setTranslation('name', 'en', 'Service Name');
  $service->setTranslation('name', 'it', 'Nome Servizio');
  $service->save();
  ```
  Retrieve:
  ```php
  echo $service->name; // Returns based on current locale
  ```

### Astrotomic Laravel Translatable
- **Purpose**: Uses a separate translation table per model, similar to the manual approach but with built-in helpers.
- **Key Features**:
  - Dedicated translation tables
  - Automatic relationship management
  - Fallback support
- **Implementation**:
  ```bash
  composer require astrotomic/laravel-translatable
  php artisan vendor:publish --provider="Astrotomic\Translatable\TranslatableServiceProvider"
  php artisan migrate
  ```
  Configure models with `Translatable` contract and trait, defining translatable fields.

## Recommendation for Multi-Module Applications
- **Primary Approach**: Start with **Spatie Laravel Translatable** for its simplicity and efficiency with JSON columns. This is ideal for most content models where quick setup and maintenance are priorities.
- **Fallback**: For complex models requiring detailed translation tracking or separate table structures (e.g., for audit purposes), consider the manual approach or **Astrotomic Laravel Translatable**.

This strategy ensures flexibility to adapt based on model complexity while maintaining ease of use for developers and translators in a multi-language application.