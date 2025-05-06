<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Models/Translation.php
 */

namespace Modules\Lang\Models;

<<<<<<< HEAD
=======
use DB;
>>>>>>> 25935b6 (.)
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Xot\Traits\Updater;
=======
>>>>>>> 25935b6 (.)

/**
 * Modules\Lang\Models\Translation.
 *
 * @property int         $id
 * @property string|null $lang
 * @property string|null $key
 * @property string|null $value
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
<<<<<<< HEAD
 * @property string $namespace
 * @property string $group
=======
 * @property string      $namespace
 * @property string      $group
>>>>>>> 25935b6 (.)
 * @property string|null $item
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   ofTranslatedGroup(string $group)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   orderByGroupKeys(bool $ordered)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   selectDistinctGroup()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereValue($value)
 * @method static \Modules\Lang\Database\Factories\TranslationFactory factory($count = null, $state = [])
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class Translation extends Model
{
    use HasFactory;
    use Updater;

=======
class Translation extends BaseModel
{
>>>>>>> 25935b6 (.)
    final public const STATUS_SAVED = 0;

    final public const STATUS_CHANGED = 1;

<<<<<<< HEAD
    /**
     * @var string
     */
    protected $table = 'language_lines';

    /**
     * @var array<string>
     */
    protected $fillable = [
        'group',
        'key',
        'text',
        'locale',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'text' => 'array',
    ];

    // protected $guarded = ['id', 'created_at', 'updated_at'];
=======
    protected $fillable = [
        'id',
        'lang',
        'value',
        'namespace',
        'group',
        'item',
    ];

    // protected $table = 'ltm_translations';
    protected $guarded = ['id', 'created_at', 'updated_at'];
>>>>>>> 25935b6 (.)

    /**
     * Undocumented function.
     */
    public function scopeOfTranslatedGroup(EloquentBuilder $query, string $group): QueryBuilder|EloquentBuilder
    {
        return $query->where('group', $group)->whereNotNull('value');
    }

    public function scopeOrderByGroupKeys(EloquentBuilder $query, bool $ordered): EloquentBuilder
    {
        if ($ordered) {
            $query->orderBy('group')->orderBy('key');
        }

        return $query;
    }

    public function scopeSelectDistinctGroup(EloquentBuilder $query): EloquentBuilder|QueryBuilder
    {
<<<<<<< HEAD
        $select = match (DB::getDriverName()) {
=======
        $select = match (\DB::getDriverName()) {
>>>>>>> 25935b6 (.)
            'mysql' => 'DISTINCT `group`',
            default => 'DISTINCT "group"',
        };

<<<<<<< HEAD
        return $query->select(DB::raw($select));
=======
        return $query->select(\DB::raw($select));
>>>>>>> 25935b6 (.)
    }

    /*
     * Get the current connection name for the model.
     *
     * @return string|null

    public function getConnectionName()
    {
        if ($connection = config('translation-manager.db_connection')) {
            return $connection;
        }

        return parent::getConnectionName();
    }
    */
<<<<<<< HEAD

    /**
     * Ottiene il valore tradotto.
     */
    public function getTranslation(string $key, ?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        $translations = $this->text;

        return $translations[$key][$locale] ?? null;
    }

    /**
     * Imposta una traduzione.
     *
     * @param array<string, string> $value
     */
    public function setTranslation(string $key, array $value): void
    {
        $translations = $this->text;
        $translations[$key] = $value;
        $this->text = $translations;
        $this->save();
    }
=======
>>>>>>> 25935b6 (.)
}
