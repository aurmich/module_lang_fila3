<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> bb1b835 (.)
use Filament\Actions;
use Modules\Cms\Filament\Resources\SectionResource;
<<<<<<< HEAD
=======
use Filament\Actions;
use Modules\Cms\Filament\Resources\SectionResource;
use Filament\Resources\Pages\EditRecord;
>>>>>>> 054e6ea (.)
=======
use Filament\Resources\Pages\EditRecord;
>>>>>>> bb1b835 (.)
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

abstract class LangBaseEditRecord extends XotBaseEditRecord
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $resource; // = SectionResource::class;

=======
    protected static string $resource;// = SectionResource::class;
>>>>>>> 054e6ea (.)
=======
    protected static string $resource;// = SectionResource::class;
>>>>>>> bb1b835 (.)
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
