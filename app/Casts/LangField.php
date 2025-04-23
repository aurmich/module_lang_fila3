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
     * @param BaseModelLang $model
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string        $key
=======
     * @param string $key
>>>>>>> 158bf09 (.)
=======
=======
>>>>>>> d41c7aa (fix: auto resolve conflict)
     * @param string $key
=======
<<<<<<< HEAD
     * @param string $key
=======
     * @param string        $key
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
<<<<<<< HEAD
>>>>>>> 6ab7db0 (fix: auto resolve conflict)
=======
=======
     * @param string        $key
>>>>>>> 8a2fcfb (.)
>>>>>>> d41c7aa (fix: auto resolve conflict)
     * @param array         $attributes
     */
    public function get($model, $key, $value, $attributes)
    {
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     *
     * @param BaseModelLang $model
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string        $key
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
=======
=======
=======
>>>>>>> d41c7aa (fix: auto resolve conflict)
=======
<<<<<<< HEAD
>>>>>>> cc26d67 (fix: auto resolve conflict)
>>>>>>> 6ab7db0 (fix: auto resolve conflict)
     * @param string $key
     * @param array         $attributes
     * @param string $key
     * @param string $value
<<<<<<< HEAD
>>>>>>> 158bf09 (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 8a2fcfb (.)
     * @param string        $key
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
<<<<<<< HEAD
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
<<<<<<< HEAD
>>>>>>> 6ab7db0 (fix: auto resolve conflict)
=======
=======
>>>>>>> 8a2fcfb (.)
>>>>>>> d41c7aa (fix: auto resolve conflict)
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
