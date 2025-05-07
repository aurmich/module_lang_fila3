<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Provider per la registrazione delle rotte del modulo Lang.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 6115da2 (.)
     */
    protected string $moduleNamespace = 'Modules\Lang\Http\Controllers';

    /**
     * The directory of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 6115da2 (.)
     */
    protected string $module_dir = __DIR__;

    /**
     * The namespace of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 6115da2 (.)
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * The name of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 6115da2 (.)
     */
    public string $name = 'Lang';

    /**
     * Bootstrap the module services.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 6115da2 (.)
     */
    public function boot(): void
    {
        parent::boot();
        $this->registerLang();
    }

    /**
     * Register the module services.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 6115da2 (.)
     */
    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
        // $this->registerLang();
=======
>>>>>>> 6115da2 (.)
    }

    /**
     * Registra le impostazioni di lingua basate sulla configurazione.
<<<<<<< HEAD
     */
    public function registerLang(): void
    {
        /** @var array<string, array<string, string>>|null $locales */
        $locales = config('laravellocalization.supportedLocales');

        if (! \is_array($locales)) {
            $locales = ['it' => ['name' => 'it'], 'en' => ['name' => 'en']];
        }

        /** @var array<string> $langs */
        $langs = array_keys($locales);

        /*
        if (! \is_array($langs)) {
            throw new \Exception('[.__LINE__.]['.class_basename(self::class).']');
        }
        \getRouteParameters();
        */
=======
     *
     * @return void
     */
    public function registerLang(): void
    {
        /** @var array<string, array<string, string|null>> $locales */
        $locales = config('laravellocalization.supportedLocales');
        
        if (! is_array($locales)) {
            $locales = ['it' => ['name' => 'it'], 'en' => ['name' => 'en']];
        }
        
        /** @var array<string> $langs */
        $langs = array_keys($locales);

>>>>>>> 6115da2 (.)
        $n = 1;
        if (inAdmin()) {
            $n = 3;
        }

<<<<<<< HEAD
        if (\in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if (null !== $lang) {
=======
        if (in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if ($lang !== null) {
>>>>>>> 6115da2 (.)
                app()->setLocale($lang);
            }
        }
    }
}
