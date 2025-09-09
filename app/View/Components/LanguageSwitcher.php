<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Lang\Filament\Widgets\LanguageSwitcherWidget;

/**
 * Componente Blade per il Language Switcher.
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
=======
 * 
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 * 
 * @package Modules\Lang\View\Components
>>>>>>> ff3bb05 (.)
=======
 *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
>>>>>>> b791681 (.)
 */
class LanguageSwitcher extends Component
{
    /**
     * Widget associato al componente.
     */
    protected LanguageSwitcherWidget $widget;

    /**
     * Crea una nuova istanza del componente.
     */
    public function __construct()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget = new LanguageSwitcherWidget;
=======
        $this->widget = new LanguageSwitcherWidget();
>>>>>>> ff3bb05 (.)
=======
        $this->widget = new LanguageSwitcherWidget;
>>>>>>> b791681 (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
<<<<<<< HEAD
        $empty_view = 'lang::components.empty';
        /** @phpstan-ignore-next-line */
        if (! view()->exists($empty_view)) {
            throw new \Exception('view not exists ['.$empty_view.']');
        }
        // Verifica se il widget può essere visualizzato
        if (! LanguageSwitcherWidget::canView()) {
            return view($empty_view);
        }

        // Ottiene i dati dal widget
        $viewData = $this->widget->getViewData();

        $switcher_view = 'lang::filament.widgets.language-switcher';
        /** @phpstan-ignore-next-line */
        if (! view()->exists($switcher_view)) {
            throw new \Exception('view not exists ['.$switcher_view.']');
        }

        return view($switcher_view, $viewData);
=======
        if (! LanguageSwitcherWidget::canView()) {
            /** @var view-string $view */
            $view = 'lang::components.empty';
            return view($view);
        }

        // Ottiene i dati dal widget tramite metodo pubblico
        $viewData = $this->widget->exposeViewData();
        /** @var view-string $view */
        $view = 'lang::filament.widgets.language-switcher';
        return view($view, $viewData);
>>>>>>> ff3bb05 (.)
    }
}
