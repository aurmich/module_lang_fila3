<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns;
=======
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 1e3d805 (.)
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTranslationFiles extends XotBaseListRecords
{
    protected static string $resource = TranslationFileResource::class;

<<<<<<< HEAD
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            Columns\TextColumn::make('key')->searchable(['key', 'content']),
=======
    public function getTableColumns(): array
    {
        return [
            Columns\TextColumn::make('key')
               ->searchable(['key','content']),

>>>>>>> 1e3d805 (.)
        ];
    }

    /**
     * @return array<string, \Filament\Actions\Action>
     */
<<<<<<< HEAD
    #[\Override]
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();

=======
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();
        
>>>>>>> 1e3d805 (.)
        // Assicurarsi che tutte le azioni abbiano chiavi stringa
        $actions = [
            'locale_switcher' => LocaleSwitcherRefresh::make('lang'),
        ];
<<<<<<< HEAD

        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : ((string) $key))] = $action;
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

>>>>>>> 1e3d805 (.)
}
