<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;

class GetTransPathAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $key): string
    {
        // $finder = trans()->getFinder();
        // dddx($finder);
        // $viewHints = [];
        // if (method_exists($finder, 'getHints')) {
        //    $viewHints = $finder->getHints();
        // }

        $ns = Str::of($key)->before('::')->toString();
        $item = Str::of($key)->after('::')->toString();
        $piece = explode('.', $item);
        $module_path = Module::getModulePath($ns);
        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::of($module_path)->beforeLast('/')->toString();
        }
        $lang = app()->getLocale();
        // Utilizziamo l'action centralizzata per recuperare il percorso con validazione integrata
        $lang_path = app(GetModulePathByGeneratorAction::class)->execute($ns, 'lang');
        Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');

        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');

        return $lang_path.'/'.$lang.'/'.$file_name.'.php';
    }
}
