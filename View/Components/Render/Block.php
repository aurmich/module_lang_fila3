<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Module\GetModuleNameFromModelAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
class Block extends Component
{
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = 'v1')
    {
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $this->tpl = $this->block['type'];

        $views = ['ui::components.blocks.'.$this->tpl];
        if ($this->model !== null) {
            $module = app(GetModuleNameFromModelAction::class)->execute($this->model);
            $views[] = strtolower($module).'::components.blocks.'.$this->tpl;
        }

        /**
         * @phpstan-var view-string|null
         */
        $view = Arr::first($views, static fn (string $view) => view()->exists($view));
<<<<<<< HEAD
        if (null === $view) {
<<<<<<< HEAD
            throw new Exception('none of these views exists ['.implode(', '.chr(13),$views).']');
            //dddx([$views, $this->model]);
=======
=======
        if ($view === null) {
>>>>>>> 1fc11df (Dusting)
            dddx([$views, $this->model]);
>>>>>>> 760233f (Lint)
        }
        $view_params = $this->block['data'] ?? [];

        return view($view, $view_params);
    }
}
