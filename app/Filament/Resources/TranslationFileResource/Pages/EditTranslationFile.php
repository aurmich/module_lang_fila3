<?php

namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Lang\Filament\Resources\TranslationFileResource;

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
    public function getTranslatableLocales(){
        return ['it', 'en'];
    }
   
    protected function mutateFormDataBeforeSave(array $data): array
    {
        /** @phpstan-ignore argument.type, property.nonObject */
        app(SaveTransAction::class)->execute($this->record->key,$data['content']);
        return $data;
    }

    protected function afterSave(): void
    {
        /** @phpstan-ignore method.nonObject */
        $this->record->refresh();
    }

    public function getFormSchema(): array
    {
        return [
            Section::make('content')
                ->schema(fn($record)=>$this->makeFromArray($record->content,'content'))
        ];
    }

    public function makeFromArray(array $array, string $prefix = ''): array
    {
        $fields = [];

        foreach ($array as $key => $value) {
            $fullKey = $prefix === '' ? $key : $prefix . '.' . $key;

            if (is_array($value)) {
                $fields[] = Section::make($key)
                    ->label($fullKey)
                    ->schema(self::makeFromArray($value, $fullKey))
                    ->columns(2);
            } else {
                $fields[] = TextInput::make($fullKey)
                    //->label($fullKey)
                    ->label($key)
                    ->default($value)
                    ;
            }
        }

        return $fields;
    }
}
