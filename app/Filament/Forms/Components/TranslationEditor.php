<?php

// app/Filament/Components/TranslationEditor.php
<<<<<<< HEAD

namespace Modules\Lang\Filament\Forms\Components;

=======
namespace Modules\Lang\Filament\Forms\Components;

use Illuminate\Support\Arr;
>>>>>>> 054e6ea (.)
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;

class TranslationEditor extends Field
{
    protected string $view = 'lang::filament.forms.components.translation-editor';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(function (TranslationEditor $component, $state) {
            $component->state($state ?? []);
        });
    }

    public function getChildComponents(): array
    {
        $components = [];
        $state = $this->getState() ?? [];
<<<<<<< HEAD
        if (! is_iterable($state)) {
=======
        if(!is_iterable($state)){
>>>>>>> 054e6ea (.)
            return $components;
        }

        foreach ($state as $key => $value) {
            if (is_array($value)) {
                $components[] = Section::make($key)
                    ->schema([
                        TranslationEditor::make($key)
                            ->label('')
<<<<<<< HEAD
                            ->state($value),
=======
                            ->state($value)
>>>>>>> 054e6ea (.)
                    ]);
            } else {
                $components[] = TextInput::make($key)
                    ->label(str_replace('_', ' ', $key))
                    ->default($value);
            }
        }

        return $components;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 054e6ea (.)
