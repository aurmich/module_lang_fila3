<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> 8da72fe (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'lang::filament.pages.dashboard';
}
