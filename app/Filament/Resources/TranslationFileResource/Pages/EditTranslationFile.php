<?php

namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> bb1b835 (.)
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
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
=======
use Modules\Lang\Filament\Resources\TranslationFileResource;
>>>>>>> bb1b835 (.)

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
=======
    public function getTranslatableLocales(){
        return ['it', 'en'];
    }
   
>>>>>>> bb1b835 (.)
    protected function mutateFormDataBeforeSave(array $data): array
    {
        /*
        // Salva le traduzioni nel file
        try {
            $this->record->saveTranslations($data['content']);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 054e6ea (.)
=======
            
>>>>>>> bb1b835 (.)
            Notification::make()
                ->title('Traduzioni salvate con successo')
                ->success()
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 054e6ea (.)
=======
                
>>>>>>> bb1b835 (.)
        } catch (\Exception $e) {
            Notification::make()
                ->title('Errore durante il salvataggio')
                ->body($e->getMessage())
                ->danger()
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 054e6ea (.)
=======
                
>>>>>>> bb1b835 (.)
            // Previeni il salvataggio se c'è un errore
            $this->halt();
        }
        */
        /** @phpstan-ignore argument.type, property.nonObject */
<<<<<<< HEAD
<<<<<<< HEAD
        app(SaveTransAction::class)->execute($this->record->key, $data['content']);

        // dddx(['record'=>$this->record,'data'=>$data]);
=======
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
        //dddx(['record'=>$this->record,'data'=>$data]);
>>>>>>> 054e6ea (.)
=======
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
        //dddx(['record'=>$this->record,'data'=>$data]);
>>>>>>> bb1b835 (.)
        return $data;
    }

    protected function afterSave(): void
    {
        // Ricarica il record per aggiornare i dati
        /** @phpstan-ignore method.nonObject */
        $this->record->refresh();
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 054e6ea (.)
=======

>>>>>>> bb1b835 (.)
    public function getFormSchema(): array
    {
        return [
            Section::make('content')
<<<<<<< HEAD
<<<<<<< HEAD
                ->schema(fn ($record) => $this->makeFromArray($record->content, 'content')),
=======
                ->schema(fn($record)=>$this->makeFromArray($record->content,'content'))
>>>>>>> 054e6ea (.)
=======
                ->schema(fn($record)=>$this->makeFromArray($record->content,'content'))
>>>>>>> bb1b835 (.)
        ];
    }

    public function makeFromArray(array $array, string $prefix = ''): array
    {
        $fields = [];

        foreach ($array as $key => $value) {
<<<<<<< HEAD
<<<<<<< HEAD
            $fullKey = $prefix === '' ? $key : $prefix.'.'.$key;
=======
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;
>>>>>>> 054e6ea (.)
=======
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;
>>>>>>> bb1b835 (.)

            if (is_array($value)) {
                $fields[] = Section::make($key)
                    ->label($fullKey)
                    ->schema(self::makeFromArray($value, $fullKey))
                    ->columns(2);
            } else {
                $fields[] = TextInput::make($fullKey)
<<<<<<< HEAD
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
=======
                    //->label($fullKey)
                    ->label($key)
                    ->default($value)
                    ;
>>>>>>> bb1b835 (.)
            }
        }

        return $fields;
    }
}
