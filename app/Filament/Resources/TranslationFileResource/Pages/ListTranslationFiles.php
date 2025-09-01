<?php

namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns;
=======
use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 054e6ea (.)
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
                ->searchable(['key', 'content']),
=======
               ->searchable(['key','content']),
>>>>>>> 054e6ea (.)

        ];
    }

    /**
     * @return array<string, \Filament\Actions\Action>
     */
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();
<<<<<<< HEAD

=======
        
>>>>>>> 054e6ea (.)
        // Assicurarsi che tutte le azioni abbiano chiavi stringa
        $actions = [
            'locale_switcher' => LocaleSwitcherRefresh::make('lang'),
        ];
<<<<<<< HEAD

        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_'.(is_string($key) ? $key : (string) $key)] = $action;
        }

        return $actions;
    }
=======
        
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
        return $actions;
    }

>>>>>>> 054e6ea (.)
}
