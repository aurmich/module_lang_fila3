<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use function Safe\glob;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\App;

class GetAllTranslationAction
{
    use QueueableAction;

    /**
     * Restituisce il path completo del file di traduzione dato un key.
     */
    public function execute(): array
    {
        $loader = App::make('translation.loader');
        $namespaces = $loader->namespaces();
        $namespaces = Arr::where($namespaces,function($namespace){
            return !Str::of($namespace)->startsWith(base_path('vendor/'));
        });
        

        $lang=session()->get('locale');
        if(is_string($lang) && in_array($lang,['it','en'])){
            app()->setLocale($lang);
        }

        $lang=app()->getLocale();
        $res=[];
        foreach($namespaces as $namespace=>$path){
            $path = $path.'/'.$lang.'/*.php';
            $files=glob($path);
            $files=Arr::map($files,function($file) use ($namespace){
                
                return [
                    'key'=>$namespace.'::'.basename($file,'.php'),
                    'path'=>$file,
                ];
            });
            $res=array_merge($res,$files);
        }
        
        return $res;
        
    }
}
