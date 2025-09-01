<?php

namespace Modules\Lang\Filament\Actions;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\App;

class LocaleSwitcherRefresh extends Action
{
<<<<<<< HEAD
    public string $full_url = '#';

    public string $lang = '';
=======

    public string $full_url='#';
    public string $lang='';
    
>>>>>>> 054e6ea (.)

    protected function setUp(): void
    {

        parent::setUp();
<<<<<<< HEAD
        $lang_options = [
            'en' => '🇬🇧 English',
            'it' => '🇮🇹 Italiano',
        ];
        $lang = session()->get('locale');
        if (! is_string($lang)) {
            $lang = 'it';
        }
        app()->setLocale($lang);
        $this->lang = app()->getLocale();
        $this->full_url = request()->fullUrl();
=======
        $lang_options= [
            'en' => '🇬🇧 English',
            'it' => '🇮🇹 Italiano',
        ];
        $lang=session()->get('locale');
        if(!is_string($lang)){
            $lang='it';
        }
        app()->setLocale($lang);
        $this->lang=app()->getLocale();
        $this->full_url=request()->fullUrl();
>>>>>>> 054e6ea (.)
        $this
            ->label($this->lang)
            ->form([
                \Filament\Forms\Components\Select::make('locale')
                    ->label('Seleziona lingua')
                    ->options($lang_options)
                    ->default($this->lang)
                    ->reactive()
                    ->required(),
            ])
            ->action(function (array $data) {
                $locale = $data['locale'];

                session()->put('locale', $locale);
                App::setLocale($locale);
<<<<<<< HEAD
                // Filament::setLocale($locale);

                return redirect(request()->header('Referer'));
            })
            ->modalHeading('Cambia lingua')
            // ->icon('heroicon-o-language')
=======
                //Filament::setLocale($locale);
                
                return redirect(request()->header('Referer'));
            })
            ->modalHeading('Cambia lingua')
            //->icon('heroicon-o-language')
>>>>>>> 054e6ea (.)
            ->color('gray');
    }
}
