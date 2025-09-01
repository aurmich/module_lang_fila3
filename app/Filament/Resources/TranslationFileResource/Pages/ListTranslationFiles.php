<?php

namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns;
=======
use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 054e6ea (.)
=======
use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> bb1b835 (.)
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTranslationFiles extends XotBaseListRecords
{
    protected static string $resource = TranslationFileResource::class;

    public function getTableColumns(): array
    {
        return [
            Columns\TextColumn::make('key')
<<<<<<< HEAD
<<<<<<< HEAD
                ->searchable(['key', 'content']),
=======
               ->searchable(['key','content']),
>>>>>>> 054e6ea (.)
=======
               ->searchable(['key','content']),
>>>>>>> bb1b835 (.)

        ];
    }

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
            'locale_switcher' => LocaleSwitcherRefresh::make('lang'),
        ];
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> bb1b835 (.)
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
        return $actions;
    }
<<<<<<< HEAD
=======
        
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
        return $actions;
    }

>>>>>>> 054e6ea (.)
=======

>>>>>>> bb1b835 (.)
}
