<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

=======
use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 054e6ea (.)
use function Safe\glob;

class GetAllTranslationAction
{
    use QueueableAction;

    /**
     * Restituisce il path completo del file di traduzione dato un key.
     */
    public function execute(): array
    {
<<<<<<< HEAD
        $lang = session()->get('locale');
        if (is_string($lang) && in_array($lang, ['it', 'en'])) {
            app()->setLocale($lang);
        }

        $lang = app()->getLocale();
        $path = base_path('Modules/*/lang/'.$lang.'/*.php');
        $files = glob($path);
        $files = Arr::map($files, function ($file) {
            $module_low = Str::of($file)->between('Modules/', '/lang/')->lower()->toString();

            return [
                'key' => $module_low.'::'.basename($file, '.php'),
                'path' => $file,
            ];
        });

=======
        $lang=session()->get('locale');
        if(is_string($lang) && in_array($lang,['it','en'])){
            app()->setLocale($lang);
        }

        $lang=app()->getLocale();
        $path = base_path('Modules/*/lang/'.$lang.'/*.php');
        $files=glob($path);
        $files=Arr::map($files,function($file){
            $module_low=Str::of($file)->between('Modules/','/lang/')->lower()->toString();
            return [
                'key'=>$module_low.'::'.basename($file,'.php'),
                'path'=>$file,
            ];
        });
>>>>>>> 054e6ea (.)
        return $files;
    }
}
