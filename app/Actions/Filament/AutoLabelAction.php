<?php

declare(strict_types=1);

namespace Modules\Lang\Actions\Filament;

use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class AutoLabelAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     *
     * @param Field|BaseFilter|Column|Step|Action|TableAction $component
     *
     * @return Field|BaseFilter|Column|Step|Action|TableAction
     */
<<<<<<< HEAD
    public function execute($component,string $type = 'label')
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
    public function execute($component,string $type = 'label')
=======
    public function execute($component)
>>>>>>> bde0734 (.)
=======
    public function execute($component,string $type = 'label')
>>>>>>> Stashed changes
=======
    public function execute($component)
>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 1754090 (.)
            if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\')){
                return true;
            }
            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\')){
                return true;
            }
            return false;
        });
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class'])){
                $object_class = $class['class'];
            }
            if(is_null($object_class)){
                throw new \Exception('No object class found');
            }
<<<<<<< HEAD
=======
=======
            if (! isset($item['object'])) {
                return false;
=======
            if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\')){
                return true;
>>>>>>> Stashed changes
            }
            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\')){
                return true;
            }
            return false;
        });
<<<<<<< Updated upstream
=======
            if (! isset($item['object'])) {
                return false;
            }

            return Str::startsWith($item['object']::class, 'Modules\\');
            // return Str::startsWith($item['class'],'Modules\\');
        });
>>>>>>> 2dbb0e7 (.)
        if (is_array($class) && isset($class['object'])) {
            $object_class = $class['object']::class;

            // Assert::string($class = Arr::get($backtrace, '5.class'));
<<<<<<< HEAD
>>>>>>> bde0734 (.)
=======
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class'])){
                $object_class = $class['class'];
            }
            if(is_null($object_class)){
                throw new \Exception('No object class found');
            }
>>>>>>> Stashed changes
=======
>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)
            $trans_key = app(GetTransKeyAction::class)->execute($object_class);
        } else {
            $trans_key = 'lang::txt';
        }

        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } else {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.fields.'.$val.'';
        }

        if ($component instanceof Action) {
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 1754090 (.)
        $label_key = $label_tkey.'.'.Str::snake($type);

        $label = trans($label_key);
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            /*
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2dbb0e7 (.)
        $label_key = $label_tkey.'.label';

        $label = trans($label_key);
        if (is_string($label)) {
<<<<<<< HEAD
>>>>>>> bde0734 (.)
=======
        $label_key = $label_tkey.'.'.Str::snake($type);

        $label = trans($label_key);
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            /*
>>>>>>> Stashed changes
=======
>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)
            if ($label_key == $label) {
                $label_value = $val;
                $label_key1 = $label_tkey;
                $label1 = trans($label_key1);
                if ($label_key1 != $label1) {
                    $label_value = $label1;
                }

                app(SaveTransAction::class)->execute($label_key, $label_value);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> 1754090 (.)
            */
            if (method_exists($component, $type)) {
                $component->{$type}($label);
            }
            
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        }
        if (!is_string($label)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2dbb0e7 (.)
            $component->label($label);
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        } else {
<<<<<<< HEAD
>>>>>>> bde0734 (.)
=======
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        }
        if (!is_string($label)) {
>>>>>>> Stashed changes
=======
>>>>>>> 2dbb0e7 (.)
>>>>>>> 1754090 (.)
            $component->label('FIX:'.$label_key);
        }

        return $component;
    }
}
