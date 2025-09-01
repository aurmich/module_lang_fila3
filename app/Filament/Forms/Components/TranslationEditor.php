<?php

// app/Filament/Components/TranslationEditor.php
<<<<<<< HEAD
<<<<<<< HEAD

namespace Modules\Lang\Filament\Forms\Components;

=======
namespace Modules\Lang\Filament\Forms\Components;

use Illuminate\Support\Arr;
>>>>>>> 054e6ea (.)
=======
namespace Modules\Lang\Filament\Forms\Components;

use Illuminate\Support\Arr;
>>>>>>> bb1b835 (.)
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
<<<<<<< HEAD
        if (! is_iterable($state)) {
=======
        if(!is_iterable($state)){
>>>>>>> 054e6ea (.)
=======
        if(!is_iterable($state)){
>>>>>>> bb1b835 (.)
            return $components;
        }

        foreach ($state as $key => $value) {
            if (is_array($value)) {
                $components[] = Section::make($key)
                    ->schema([
                        TranslationEditor::make($key)
                            ->label('')
<<<<<<< HEAD
<<<<<<< HEAD
                            ->state($value),
=======
                            ->state($value)
>>>>>>> 054e6ea (.)
=======
                            ->state($value)
>>>>>>> bb1b835 (.)
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 054e6ea (.)
=======
}
>>>>>>> bb1b835 (.)
