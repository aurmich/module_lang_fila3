<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
<<<<<<< HEAD

use Filament\Actions;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Config;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\XotBaseResource;
=======
use Filament\Actions;
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 1e3d805 (.)

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;

<<<<<<< HEAD
=======

>>>>>>> 1e3d805 (.)
    public static function getDefaultTranslatableLocale(): string
    {
        return Config::string('app.locale', 'it');
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }
<<<<<<< HEAD
=======



>>>>>>> 1e3d805 (.)
}
