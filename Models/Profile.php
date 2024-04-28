<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
// use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Rating\Models\Rating;
use Modules\Rating\Models\RatingMorph;
use Modules\User\Models\User;
// use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Modules\Xot\Models\BaseProfile as XotBaseProfile;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;

/**
 * Modules\Blog\Models\Profile.
 *
 * @property int $credits
 */
class Profile extends XotBaseProfile implements HasMedia
{
    use InteractsWithMedia;

    /** @var string */
    protected $connection = 'blog';

    /** @var array<int, string> */
    protected $fillable = [
        'id',
        'user_id',
        'email',
        'first_name',
        'last_name',
        'credits',
        'slug',
        'extra',
    ];

    /** @var array<string, string> */
    public $casts = [
        'extra' => SchemalessAttributes::class,
    ];

    /** @var array */
    protected $schemalessAttributes = [
        'extra',
    ];

    /**
     * @return HasMany<Article>
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Get the route key for the user.
     *
     * @return string
     */
    public function getFrontRouteKeyName()
    {
        return 'slug';
    }

    public function getAvatarUrl(): string
    {
        if (null == $this->getFirstMediaUrl('photo_profile')) {
            // in caso eseguire php artisan module:publish
            // dddx($this);
            // dddx(asset('blog/img/no_user.webp'));
            return asset('modules/blog/img/no_user.webp');
        }

        return $this->getFirstMediaUrl('photo_profile');
    }

    public function ratings(): HasManyThrough
    {
        $firstKey = 'user_id';
        $secondKey = 'id';
        $localKey = 'user_id';
        $secondLocalKey = 'rating_id';

        return $this->hasManyThrough(Rating::class, RatingMorph::class, $firstKey, $secondKey, $localKey, $secondLocalKey)
            // ->withPivot(['value'])
        ;
    }

    public function ratingMorphs(): HasMany
    {
        return $this->hasMany(RatingMorph::class, 'user_id', 'user_id');
    }

    // : int
    public function getArticleTraded(): \Illuminate\Support\Collection
    {
        $result = RatingMorph::where('user_id', $this->user_id)
            ->groupBy('model_id')
            ->pluck('model_id')
            // ->get()
            // ->count()
        ;

        return $result;
    }
}
