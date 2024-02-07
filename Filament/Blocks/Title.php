<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Title
{
    public static function make(
        string $name = 'title',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('text')
                        ->required(),

<<<<<<< HEAD
                    Select::make('level')
                        ->options(
                            [
                                'h2' => 'h2',
                                'h3' => 'h3',
                                'h4' => 'h4',
                            ]
                        )
                        ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),
                ]
            )
            ->columns('form' === $context ? 2 : 1);
=======
                Select::make('level')
                    ->options([
                        'h2' => 'h2',
                        'h3' => 'h3',
                        'h4' => 'h4',
                    ])
                    ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),
            ])
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> 1fc11df (Dusting)
    }
}
