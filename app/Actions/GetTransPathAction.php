<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Str;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> bde0734 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> Stashed changes
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)

class GetTransPathAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 1754090 (.)
     * Restituisce il path completo del file di traduzione dato un key.
     */
    public function execute(string $key): string
    {
        $ns = Str::of($key)->before('::')->toString();
        $item = Str::of($key)->after('::')->toString();
        $piece = explode('.', $item);
        $lang = app()->getLocale();
        try {
            $lang_path = app(GetModulePathByGeneratorAction::class)->execute($ns, 'lang');
            Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');
        } catch (\Throwable $e) {
            $lang_path = base_path('Modules/'.$ns.'/lang');
        }
        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');
<<<<<<< HEAD
=======
=======
     * Undocumented function.
=======
     * Restituisce il path completo del file di traduzione dato un key.
>>>>>>> Stashed changes
     */
    public function execute(string $key): string
    {
        $ns = Str::of($key)->before('::')->toString();
        $item = Str::of($key)->after('::')->toString();
        $piece = explode('.', $item);
        $lang = app()->getLocale();
        try {
            $lang_path = app(GetModulePathByGeneratorAction::class)->execute($ns, 'lang');
            Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');
        } catch (\Throwable $e) {
            $lang_path = base_path('Modules/'.$ns.'/lang');
        }
        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');
<<<<<<< Updated upstream

>>>>>>> bde0734 (.)
=======
>>>>>>> Stashed changes
=======
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
        $relativePath = config('modules.paths.generator.lang.path');
        
        // Utilizziamo module_path e verifichiamo che restituisca una stringa
        $lang_path = module_path($ns, $relativePath);
        Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');
        
        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');

>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)
        return $lang_path.'/'.$lang.'/'.$file_name.'.php';
    }
}
