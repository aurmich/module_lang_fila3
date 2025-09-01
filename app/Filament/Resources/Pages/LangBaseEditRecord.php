<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Cms\Filament\Resources\SectionResource;
=======
use Filament\Actions;
use Modules\Cms\Filament\Resources\SectionResource;
use Filament\Resources\Pages\EditRecord;
>>>>>>> 054e6ea (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

abstract class LangBaseEditRecord extends XotBaseEditRecord
{
<<<<<<< HEAD
    protected static string $resource; // = SectionResource::class;

=======
    protected static string $resource;// = SectionResource::class;
>>>>>>> 054e6ea (.)
    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            ...parent::getHeaderActions(),
            // ...
        ];
    }
}
