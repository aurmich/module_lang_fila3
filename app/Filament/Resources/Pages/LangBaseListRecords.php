<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources\Pages;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> bb1b835 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 054e6ea (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> bb1b835 (.)

abstract class LangBaseListRecords extends XotBaseListRecords
{
    use ListRecords\Concerns\Translatable;
<<<<<<< HEAD
<<<<<<< HEAD

    protected static string $resource; // = SectionResource::class;
=======
    protected static string $resource;// = SectionResource::class;

>>>>>>> 054e6ea (.)
=======
    protected static string $resource;// = SectionResource::class;

>>>>>>> bb1b835 (.)

    /**
     * @return array<string, \Filament\Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 054e6ea (.)
=======
        
>>>>>>> bb1b835 (.)
        // Assicurarsi che tutte le azioni abbiano chiavi stringa
        $actions = [
            'locale_switcher' => Actions\LocaleSwitcher::make(),
        ];
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> bb1b835 (.)
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
<<<<<<< HEAD

=======
        
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
>>>>>>> 054e6ea (.)
=======
        
>>>>>>> bb1b835 (.)
        return $actions;
    }
}
