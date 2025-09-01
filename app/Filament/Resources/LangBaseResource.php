<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
<<<<<<< HEAD
<<<<<<< HEAD

use Filament\Resources\Concerns\Translatable;
=======
use Filament\Actions;
>>>>>>> bb1b835 (.)
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
=======
use Filament\Actions;
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 054e6ea (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> bb1b835 (.)

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 054e6ea (.)
=======

>>>>>>> bb1b835 (.)
    public static function getDefaultTranslatableLocale(): string
    {
        return Config::string('app.locale', 'it');
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======



>>>>>>> 054e6ea (.)
=======



>>>>>>> bb1b835 (.)
}
