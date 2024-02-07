<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Image
{
    public static function make(
        string $name = 'image',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
                    FileUpload::make('image')
                        ->label('Image upload'),

                    TextInput::make('url')
                        ->label('or Image URL'),

                    Select::make('ratio')
                        ->options(static::getRatios())
                        ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                    TextInput::make('alt')
                        ->columnSpanFull(),

<<<<<<< HEAD
                    TextInput::make('caption')
                        ->columnSpanFull(),
                ]
            )
            ->columns('form' === $context ? 2 : 1);
=======
                TextInput::make('caption')
                    ->columnSpanFull(),
            ])
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> 1fc11df (Dusting)
    }

    public static function getRatios(): array
    {
        return [
            '4-3' => '4/3',
            '3-4' => '3/4',
            'free' => 'free',
        ];
    }

    public static function getRatioClass(string $ratio): string
    {
        return match ($ratio) {
            '4-3' => 'aspect-[4/3]',
            '3-4' => 'aspect-[3/4]',
            default => '',
        };
    }
}
