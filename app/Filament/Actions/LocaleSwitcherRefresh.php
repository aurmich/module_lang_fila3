<?php

namespace Modules\Lang\Filament\Actions;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\App;

class LocaleSwitcherRefresh extends Action
{
<<<<<<< HEAD
<<<<<<< HEAD
    public string $full_url = '#';

    public string $lang = '';
=======

    public string $full_url='#';
    public string $lang='';
    
>>>>>>> 054e6ea (.)
=======

    public string $full_url='#';
    public string $lang='';
    
>>>>>>> bb1b835 (.)

    protected function setUp(): void
    {

        parent::setUp();
<<<<<<< HEAD
<<<<<<< HEAD
        $lang_options = [
=======
        $lang_options= [
>>>>>>> bb1b835 (.)
            'en' => '🇬🇧 English',
            'it' => '🇮🇹 Italiano',
        ];
        $lang=session()->get('locale');
        if(!is_string($lang)){
            $lang='it';
        }
        app()->setLocale($lang);
<<<<<<< HEAD
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
=======
        $this->lang=app()->getLocale();
        $this->full_url=request()->fullUrl();
>>>>>>> bb1b835 (.)
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
=======
                //Filament::setLocale($locale);
                
                return redirect(request()->header('Referer'));
            })
            ->modalHeading('Cambia lingua')
            //->icon('heroicon-o-language')
>>>>>>> bb1b835 (.)
            ->color('gray');
    }
}
