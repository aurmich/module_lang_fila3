<?php

namespace Modules\Lang\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Tables;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Tables\Table;
>>>>>>> bb1b835 (.)
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Config;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Models\TranslationFile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
=======
use Filament\Tables;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Config;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Models\TranslationFile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages;
use Modules\Lang\Filament\Resources\TranslationFileResource\RelationManagers;
>>>>>>> 054e6ea (.)
=======
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource\Pages;
use Modules\Lang\Filament\Resources\TranslationFileResource\RelationManagers;
>>>>>>> bb1b835 (.)

class TranslationFileResource extends XotBaseResource
{
    protected static ?string $model = TranslationFile::class;

    public static function getDefaultTranslatableLocale(): string
    {
        return Config::string('app.locale', 'it');
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function getFormSchema(): array
    {

=======
    

    public static function getFormSchema(): array
    {
       
>>>>>>> 054e6ea (.)
=======
    

    public static function getFormSchema(): array
    {
       
>>>>>>> bb1b835 (.)
        return [];
        /*
        return [
            Components\TextInput::make('key')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Chiave File'),

            Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Nome File'),

            Components\TextInput::make('path')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->label('Percorso File'),
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 054e6ea (.)
=======
            
>>>>>>> bb1b835 (.)
            Components\KeyValue::make('content')
                ->label('Traduzioni')
                ->keyLabel('Chiave')
                ->valueLabel('Valore')
                ->addActionLabel('Aggiungi Traduzione')
                ->deleteActionLabel('Rimuovi')
                ->reorderable()
                ->columnSpanFull(),
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 054e6ea (.)
=======
            
>>>>>>> bb1b835 (.)
        ];
        */
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
   
>>>>>>> 054e6ea (.)
=======
   
>>>>>>> bb1b835 (.)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslationFiles::route('/'),
            'create' => Pages\CreateTranslationFile::route('/create'),
<<<<<<< HEAD
<<<<<<< HEAD
            // 'view' => Pages\ViewTranslationFile::route('/{record}'),
            'edit' => Pages\EditTranslationFile::route('/{record}/edit'),
        ];
    }
=======
            //'view' => Pages\ViewTranslationFile::route('/{record}'),
            'edit' => Pages\EditTranslationFile::route('/{record}/edit'),
        ];
    }


   
>>>>>>> 054e6ea (.)
=======
            //'view' => Pages\ViewTranslationFile::route('/{record}'),
            'edit' => Pages\EditTranslationFile::route('/{record}/edit'),
        ];
    }


   
>>>>>>> bb1b835 (.)
}
