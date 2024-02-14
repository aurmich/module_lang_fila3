<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    // use Searchable;
    use HasFactory;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     * @var bool
*/
    public static $snakeAttributes = true;

    /**
* @var bool
*/
public $incrementing = true;

    /**
* @var bool
*/
    public $timestamps = true;

    protected int $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [];

    /**
* @var string
*/
protected $primaryKey = 'id';

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return FactoryService::newFactory(static::class);
    }
}
