<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Lang\Filament\Widgets\LanguageSwitcherWidget;

/**
 * Componente Blade per il Language Switcher.
 *
 * Wrappa il LanguageSwitcherWidget per l'uso nei temi tramite sintassi Blade.
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
        $this->widget = new LanguageSwitcherWidget;
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
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
    }
}
