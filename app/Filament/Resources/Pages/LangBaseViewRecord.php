<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> bb1b835 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Resources\Pages\ViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
<<<<<<< HEAD
    protected static string $resource; // = SectionResource::class;

=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Resources\Pages\ViewRecord;

abstract class LangBaseViewRecord extends XotBaseViewRecord
{
    protected static string $resource;// = SectionResource::class;
>>>>>>> 054e6ea (.)
=======
    protected static string $resource;// = SectionResource::class;
>>>>>>> bb1b835 (.)
    use ViewRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            ...parent::getHeaderActions(),
            // ...
        ];
    }
}
