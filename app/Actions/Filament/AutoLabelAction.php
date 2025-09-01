<?php

declare(strict_types=1);

namespace Modules\Lang\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Section as FormsSection;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
=======
use ReflectionClass;
>>>>>>> bb1b835 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use ReflectionClass;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
=======
>>>>>>> bb1b835 (.)
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Field;
use Filament\Tables\Filters\BaseFilter;
use Modules\Lang\Actions\SaveTransAction;
use Filament\Forms\Components\Wizard\Step;
use Modules\Xot\Actions\GetTransKeyAction;
use Spatie\QueueableAction\QueueableAction;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Forms\Components\Section as FormsSection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
<<<<<<< HEAD
>>>>>>> 054e6ea (.)
=======
>>>>>>> bb1b835 (.)

class AutoLabelAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Field|BaseFilter|Column|Step|Action|TableAction|FormsSection  $component
=======
     * @param Field|BaseFilter|Column|Step|Action|TableAction|FormsSection $component
     *
>>>>>>> bb1b835 (.)
     * @return Field|BaseFilter|Column|Step|Action|TableAction|FormsSection
     */
    public function execute($component,string $type = 'label')
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use($component){
            if($item['function'] == 'execute'){
                return false;
            }
            
           if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\') && $item['object'] != $component  ){
              return true;
            }

            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\') ){
                $reflection_class = new ReflectionClass($item['class'] );
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
                
            }
            return false;
        });
       
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class']) && $object_class == null){
                $object_class = $class['class'];
            }
<<<<<<< HEAD
            if (is_null($object_class)) {
=======
     * @param Field|BaseFilter|Column|Step|Action|TableAction|FormsSection $component
     *
     * @return Field|BaseFilter|Column|Step|Action|TableAction|FormsSection
     */
    public function execute($component,string $type = 'label')
    {
        $backtrace = debug_backtrace();
        $backtrace_slice = array_slice($backtrace, 2);
        $class = Arr::first($backtrace_slice, function ($item) use($component){
            if($item['function'] == 'execute'){
                return false;
            }
            
           if(isset($item['object']) && Str::startsWith($item['object']::class, 'Modules\\') && $item['object'] != $component  ){
              return true;
            }

            if(isset($item['class']) && Str::startsWith($item['class'], 'Modules\\') ){
                $reflection_class = new ReflectionClass($item['class'] );
                if (!$reflection_class->isAbstract()) {
                    return true;
                }
                
            }
            return false;
        });
       
        if (is_array($class)) {
            $object_class = null;
            if(isset($class['object'])){
                $object_class = $class['object']::class;
            }
            if(isset($class['class']) && $object_class == null){
                $object_class = $class['class'];
            }
            if(is_null($object_class)){
>>>>>>> 054e6ea (.)
=======
            if(is_null($object_class)){
>>>>>>> bb1b835 (.)
                throw new \Exception('No object class found');
            }
            $trans_key = app(GetTransKeyAction::class)->execute($object_class);
        } else {
            $trans_key = 'lang::txt';
        }

        $label_tkey = null;
        $val = 'no-set-val';
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> bb1b835 (.)
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } 
        if($label_tkey == null && $component instanceof FormsSection){
           
            $val = $component->getHeading();
            if($val==null){
                $val='empty';
            }
            if(!is_string($val)){
                $val=app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key.'.sections.'.$val.'';
            
        }
<<<<<<< HEAD
        if ($label_tkey == null && method_exists($component, 'getName')) {
=======
        
        if ($component instanceof Step) {
            Assert::string($val = $component->getLabel());
            $label_tkey = $trans_key.'.steps.'.$val.'';
        } 
        if($label_tkey == null && $component instanceof FormsSection){
           
            $val = $component->getHeading();
            if($val==null){
                $val='empty';
            }
            if(!is_string($val)){
                $val=app(SafeStringCastAction::class)->execute($val);
            }
            $label_tkey = $trans_key.'.sections.'.$val.'';
            
        }
        if($label_tkey == null && method_exists($component,'getName')){
>>>>>>> 054e6ea (.)
=======
        if($label_tkey == null && method_exists($component,'getName')){
>>>>>>> bb1b835 (.)
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.fields.'.$val.'';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($component instanceof Action) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }

=======
        if ($component instanceof Action ) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }
        
>>>>>>> 054e6ea (.)
=======
        if ($component instanceof Action ) {
            Assert::string($val = $component->getName());
            $label_tkey = $trans_key.'.actions.'.$val.'';
        }
        
>>>>>>> bb1b835 (.)
        /*
        $component_parent=get_parent_class($component);
        if(in_array($component_parent,['Filament\Forms\Components\Component'])){
            $component_key=Str::of(class_basename($component))->plural()->snake()->toString();
        }else{
            $component_key=Str::of(class_basename($component_parent))->plural()->snake()->toString();
        }
<<<<<<< HEAD
<<<<<<< HEAD


=======
        
        
>>>>>>> 054e6ea (.)
=======
        
        
>>>>>>> bb1b835 (.)
        $val=null;
        if(method_exists($component,'getLabel')){
            $val=$component->getLabel();
        }
        if(method_exists($component,'getHeading')){
            $val=$component->getHeading();
        }
        if(method_exists($component,'getName')){
            $val=$component->getName();
        }

        if(!in_array($component_key,['steps','fields'])){
            dddx([
                'message'=>'preso',
                'component'=>$component,
                'parent'=>get_parent_class($component),
                'component_key'=>$component_key,
            ]);
        }

        $label_tkey = $trans_key.'.'.$component_key.'.'.$val.'';
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> bb1b835 (.)
        */

        

        $label_key = $label_tkey.'.'.Str::snake($type);

        if(Str::startsWith($label_key,'media::attachments_schema')){
            dddx([
<<<<<<< HEAD
                'message' => 'preso',
                'label_key' => $label_key,
                'label_tkey' => $label_tkey,
                // 'val'=>$val,
                'type' => $type,
                'component' => $component,
                'class' => $class,
                'backtrace' => $backtrace,
=======
    
        */

        

        $label_key = $label_tkey.'.'.Str::snake($type);

        if(Str::startsWith($label_key,'media::attachments_schema')){
            dddx([
=======
>>>>>>> bb1b835 (.)
                'message'=>'preso',
                'label_key'=>$label_key,
                'label_tkey'=>$label_tkey,
                //'val'=>$val,
                'type'=>$type,
                'component'=>$component,
                'class'=>$class,
                'backtrace'=>$backtrace,
<<<<<<< HEAD
>>>>>>> 054e6ea (.)
=======
>>>>>>> bb1b835 (.)
            ]);
        }

        $label = trans($label_key);
<<<<<<< HEAD
<<<<<<< HEAD
        if (is_string($label) && $label_key == $label) { // se non esiste la traduzione, la salvo

=======
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            
>>>>>>> bb1b835 (.)
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                $component->{$type}($label);
            }
<<<<<<< HEAD

=======
        if (is_string($label) && $label_key == $label) { //se non esiste la traduzione, la salvo
            
            app(SaveTransAction::class)->execute($label_key, $val);
        }
        if (is_string($label) && $label_key != $label) { //se esiste la traduzione, la aggiorno
            if (method_exists($component, $type)) {
                $component->{$type}($label);
            }
            
>>>>>>> 054e6ea (.)
=======
            
>>>>>>> bb1b835 (.)
            if (method_exists($component, 'tooltip')) {
                $component->tooltip($label);
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($label)) {
=======
        if (!is_string($label)) {
>>>>>>> 054e6ea (.)
=======
        if (!is_string($label)) {
>>>>>>> bb1b835 (.)
            $component->label('FIX:'.$label_key);
        }

        return $component;
    }
}
