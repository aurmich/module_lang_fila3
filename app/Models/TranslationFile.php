<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Models/Translation.php
 */

namespace Modules\Lang\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Lang\Actions\GetAllTranslationAction;
use Modules\Lang\Actions\ReadTranslationFileAction;
<<<<<<< HEAD

=======
use Modules\Lang\Actions\WriteTranslationFileAction;
>>>>>>> 054e6ea (.)
use function Safe\json_encode;

/**
 * @property string|null $key
 * @property string|null $path
 * @property string|null $id
 * @property string|null $name
 * @property array<array-key, mixed>|null $content
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
<<<<<<< HEAD
 *
=======
>>>>>>> 054e6ea (.)
 * @method static \Modules\Lang\Database\Factories\TranslationFileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TranslationFile wherePath($value)
<<<<<<< HEAD
 *
=======
>>>>>>> 054e6ea (.)
 * @mixin IdeHelperTranslationFile
 * @mixin \Eloquent
 */
class TranslationFile extends BaseModel
{
    use \Sushi\Sushi;

    protected $fillable = [
        'id',
        'name',
        'path',
        'content',
    ];

    protected array $schema = [
<<<<<<< HEAD
        'key' => 'string',
        'path' => 'string',
        'id' => 'string',
        'name' => 'string',
=======
        'key' => "string",
        'path' => "string",
        'id' => "string",
        'name' => "string",
>>>>>>> 054e6ea (.)
        'content' => 'json',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public function getRows(): array
    {
        $files = app(GetAllTranslationAction::class)->execute();
<<<<<<< HEAD
        $rows = Arr::map($files, function ($item) {
            $item['id'] = $item['key'];
            $item['name'] = basename($item['path'], '.php');

            $item['content'] = json_encode(File::getRequire($item['path']));

=======
        $rows = Arr::map($files, function($item) {
            $item['id'] = $item['key'];
            $item['name'] = basename($item['path'], '.php');


            $item['content']=json_encode(File::getRequire($item['path']));
>>>>>>> 054e6ea (.)
            /*
            // Carica il contenuto del file
            try {
                $readAction = app(ReadTranslationFileAction::class);
                $item['content'] = $readAction->execute($item['path']);
            } catch (\Exception $e) {
                $item['content'] = [];
            }
            */
<<<<<<< HEAD
            // dddx($item);
            return $item;
        });

        return $rows;
    }
}
=======
            //dddx($item);
            return $item;
        });
        return $rows;
    }

   
}
>>>>>>> 054e6ea (.)
