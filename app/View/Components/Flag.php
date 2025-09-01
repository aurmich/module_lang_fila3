<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Undocumented class.
 */
class Flag extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(public string $name) {}
=======
    public function __construct(public string $name)
    {
    }
>>>>>>> 054e6ea (.)
=======
    public function __construct(public string $name)
    {
    }
>>>>>>> bb1b835 (.)

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
