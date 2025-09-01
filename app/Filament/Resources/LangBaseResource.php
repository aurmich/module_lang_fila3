<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
<<<<<<< HEAD

use Filament\Resources\Concerns\Translatable;
use Illuminate\Support\Facades\Config;
use Modules\Xot\Filament\Resources\XotBaseResource;
=======
use Filament\Actions;
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 054e6ea (.)

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;

<<<<<<< HEAD
=======

>>>>>>> 054e6ea (.)
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



>>>>>>> 054e6ea (.)
}
