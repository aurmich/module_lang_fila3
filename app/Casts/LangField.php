<?php

declare(strict_types=1);

namespace Modules\Lang\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Modules\Lang\Models\BaseModelLang;

class LangField implements CastsAttributes
{
    /**
     * Cast the given value.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  BaseModelLang  $model
     * @param  string  $key
     * @param  array  $attributes
=======
     * @param BaseModelLang $model
     * @param string        $key
     * @param array         $attributes
>>>>>>> 054e6ea (.)
=======
     * @param BaseModelLang $model
     * @param string        $key
     * @param array         $attributes
>>>>>>> bb1b835 (.)
     */
    public function get($model, $key, $value, $attributes)
    {
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  BaseModelLang  $model
     * @param  string  $key
     * @param  array  $attributes
     * @param  string  $key
     * @param  string  $value
=======
=======
>>>>>>> bb1b835 (.)
     * @param BaseModelLang $model
     * @param string        $key
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
<<<<<<< HEAD
>>>>>>> 054e6ea (.)
=======
>>>>>>> bb1b835 (.)
     */
    public function set($model, $key, $value, $attributes): array
    {
        $post = $model->post;
        $post->{$key} = $value;
        tap($post)->save();

        // parent::__construct([]);
        // return [$key => encrypt($value)];
        // return ['created_by' => 'xot'];
        return []; // tolgo l'aggiornamento di questo campo
    }
}
