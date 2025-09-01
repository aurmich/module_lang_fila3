<?php

namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

<<<<<<< HEAD
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Filament\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Lang\Filament\Resources\TranslationFileResource;
>>>>>>> 054e6ea (.)

class EditTranslationFile extends XotBaseEditRecord
{
    protected static string $resource = TranslationFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcherRefresh::make('lang'),
            ...parent::getHeaderActions(),
            // ...
        ];
    }

    /**
     * @return array<string>
     */
<<<<<<< HEAD
    public function getTranslatableLocales()
    {
        return ['it', 'en'];
    }

=======
    public function getTranslatableLocales(){
        return ['it', 'en'];
    }
   
>>>>>>> 054e6ea (.)
    protected function mutateFormDataBeforeSave(array $data): array
    {
        /*
        // Salva le traduzioni nel file
        try {
            $this->record->saveTranslations($data['content']);
<<<<<<< HEAD

=======
            
>>>>>>> 054e6ea (.)
            Notification::make()
                ->title('Traduzioni salvate con successo')
                ->success()
                ->send();
<<<<<<< HEAD

=======
                
>>>>>>> 054e6ea (.)
        } catch (\Exception $e) {
            Notification::make()
                ->title('Errore durante il salvataggio')
                ->body($e->getMessage())
                ->danger()
                ->send();
<<<<<<< HEAD

=======
                
>>>>>>> 054e6ea (.)
            // Previeni il salvataggio se c'è un errore
            $this->halt();
        }
        */
        /** @phpstan-ignore argument.type, property.nonObject */
<<<<<<< HEAD
        app(SaveTransAction::class)->execute($this->record->key, $data['content']);

        // dddx(['record'=>$this->record,'data'=>$data]);
=======
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
        //dddx(['record'=>$this->record,'data'=>$data]);
>>>>>>> 054e6ea (.)
        return $data;
    }

    protected function afterSave(): void
    {
        // Ricarica il record per aggiornare i dati
        /** @phpstan-ignore method.nonObject */
        $this->record->refresh();
    }

<<<<<<< HEAD
=======

>>>>>>> 054e6ea (.)
    public function getFormSchema(): array
    {
        return [
            Section::make('content')
<<<<<<< HEAD
                ->schema(fn ($record) => $this->makeFromArray($record->content, 'content')),
=======
                ->schema(fn($record)=>$this->makeFromArray($record->content,'content'))
>>>>>>> 054e6ea (.)
        ];
    }

    public function makeFromArray(array $array, string $prefix = ''): array
    {
        $fields = [];

        foreach ($array as $key => $value) {
<<<<<<< HEAD
            $fullKey = $prefix === '' ? $key : $prefix.'.'.$key;
=======
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;
>>>>>>> 054e6ea (.)

            if (is_array($value)) {
                $fields[] = Section::make($key)
                    ->label($fullKey)
                    ->schema(self::makeFromArray($value, $fullKey))
                    ->columns(2);
            } else {
                $fields[] = TextInput::make($fullKey)
<<<<<<< HEAD
                    // ->label($fullKey)
                    ->label($key)
                    ->default($value);
=======
                    //->label($fullKey)
                    ->label($key)
                    ->default($value)
                    ;
>>>>>>> 054e6ea (.)
            }
        }

        return $fields;
    }
}
