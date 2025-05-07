<?php

declare(strict_types=1);

namespace Modules\Lang\Models;

<<<<<<< HEAD
use Eloquent;
=======
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
use Eloquent;
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// --- traits ---
use Illuminate\Database\Eloquent\Relations\MorphTo;
// use Laravel\Scout\Searchable;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
use Modules\Xot\Traits\Updater;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Modules\Lang\Models\Post.
 *
 * @property int             $id
 * @property int|null        $user_id
 * @property string|null     $post_type
 * @property int|null        $post_id
 * @property string|null     $lang
 * @property string|null     $title
 * @property string|null     $subtitle
 * @property string|null     $guid
 * @property string|null     $txt
 * @property string|null     $image_src
 * @property string|null     $image_alt
 * @property string|null     $image_title
 * @property string|null     $meta_description
 * @property string|null     $meta_keywords
 * @property int|null        $author_id
 * @property Carbon|null     $created_at
 * @property Carbon|null     $updated_at
 * @property int|null        $category_id
 * @property string|null     $image
 * @property string|null     $content
 * @property int|null        $published
 * @property string|null     $created_by
 * @property string|null     $updated_by
 * @property string|null     $url
 * @property array|null      $url_lang
 * @property array|null      $image_resize_src
 * @property string|null     $linked_count
 * @property string|null     $related_count
 * @property string|null     $relatedrev_count
 * @property string|null     $linkable_type
 * @property int|null        $views_count
 * @property Model|\Eloquent $linkable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageResizeSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedrevCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrlLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereViewsCount($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @mixin \Eloquent
<<<<<<< HEAD
 * @mixin Eloquent
=======
<<<<<<< HEAD
 * @mixin Eloquent
=======
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
 */
class Post extends Model
{
    use HasFactory;
    use HasSlug;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6115da2 (.)

    // use Cachable;
    use Updater;

    /*
    public function getUrlAttribute($value) {

    }
    */
<<<<<<< HEAD
=======
=======
    use Updater;
    use Cachable;
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)

    final public const SEARCHABLE_FIELDS = ['title', 'guid', 'txt'];

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
    // use Searchable;
=======
<<<<<<< HEAD
    // use Searchable;
=======
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
    /** @var string */
    protected $connection = 'lang';

    /** @var list<string> */
    protected $fillable = [
        'id', 'user_id', 'post_id', 'lang', 'guid',
        'title',
        'subtitle',
        'post_type',
        'txt',
        // ------ IMAGE ---------
        'image_src', 'image_alt', 'image_title',
        // ------ SEO FIELDS -----
        'meta_description', 'meta_keywords', // seo
        'author_id',
        // ------ BUFFER ----
        'url', 'url_lang', // buffer
        'image_resize_src', // buffer
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6115da2 (.)
    ];

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /*
    public function getRouteKeyName() {
        return inAdmin() ? 'guid' : 'post_id';
    }
    */
<<<<<<< HEAD
=======
=======
        'category_id', 'image', 'content',
        'published', 'created_by', 'updated_by',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'author_id' => 'integer',
        'category_id' => 'integer',
        'published' => 'integer',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'url',
        'url_lang',
        'image_resize_src',
        'linked_count',
        'related_count',
        'relatedrev_count',
    ];
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('guid');
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6115da2 (.)
    // -------- relationship ------
    /**
     * @return MorphTo
     */
    public function linkable()
    {
        return $this->morphTo('post');
    }

    /* deprecated
    public function archive() {
        $lang = $this->lang;
        $post_type = $this->post_type;
        $obj = $this->getLinkedModel();
        $table = $obj->getTable();
        $post_table = with(new Post())->getTable();
        $rows = $obj->join($post_table, $post_table.'.post_id', $table.'.post_id')
                    ->where('lang', $lang)
                    ->where($post_table.'.post_type', $post_type)
                    ->where($post_table.'.guid', '!=', $post_type)
                    ->orderBy($table.'.updated_at', 'desc')
                    ->with('post')
<<<<<<< HEAD
                    ;
=======
>>>>>>> 6115da2 (.)

        return $rows;
    }
    */

    // end function
    // -------------- MUTATORS ------------------
<<<<<<< HEAD
=======
=======
    /**
     * Get the owning commentable model.
     */
    public function post(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * ---.
     */
    public function getUrlAttribute(): ?string
    {
        return null;
    }

    /**
     * ---.
     */
    public function getUrlLangAttribute(): ?array
    {
        return null;
    }

    /**
     * ---.
     */
    public function getImageResizeSrcAttribute(): ?array
    {
        return null;
    }

    /**
     * ---.
     */
    public function getLinkedCountAttribute(): ?string
    {
        return null;
    }

    /**
     * ---.
     */
    public function getRelatedCountAttribute(): ?string
    {
        return null;
    }

    /**
     * ---.
     */
    public function getRelatedrevCountAttribute(): ?string
    {
        return null;
    }
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)

    public function setTitleAttribute(string $value): void
    {
        $this->attributes['title'] = $value;
        $this->attributes['guid'] = Str::slug($value);
    }

    /**
<<<<<<< HEAD
     * Undocumented function.
     */
=======
<<<<<<< HEAD
     * Undocumented function.
     */
    /**
     * Restituisce il titolo del post. Se non presente, costruisce un titolo usando post_type e post_id.
     * Garantisce la sicurezza dei tipi per PHPStan livello 9.
=======
     * ---.
>>>>>>> origin/dev
     */
>>>>>>> 6115da2 (.)
    public function getTitleAttribute(?string $value): ?string
    {
        if (null !== $value) {
            return $value;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        // Recupero sicuro dei valori dagli attributi
        $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
            ? $this->attributes['post_type'] : '';
        $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
            ? (string) $this->attributes['post_id'] : '';
        $value = $postType . ' ' . $postId;

        // Aggiorna la proprietà e persiste
        $this->title = $value;
=======
>>>>>>> 6115da2 (.)
        if (! empty($this->attributes['post_type'])) {
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
                ? $this->attributes['post_type'] : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? (string) $this->attributes['post_id'] : '';
<<<<<<< HEAD
            $value = $postType.' '.$postId;
=======
            $value = $postType . ' ' . $postId;
>>>>>>> 6115da2 (.)
        } else {
            // Assicuriamoci che post_type e post_id siano stringhe
            $postType = is_string($this->post_type) ? $this->post_type : '';
            $postId = is_scalar($this->post_id) ? (string) $this->post_id : '';
<<<<<<< HEAD
            $value = $postType.' '.$postId;
=======
            $value = $postType . ' ' . $postId;
>>>>>>> 6115da2 (.)
        }

        $this->title = $value;

<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
        $this->save();

        return $value;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Restituisce il GUID del post. Se non presente, genera uno slug dal titolo.
     * Garantisce la sicurezza dei tipi per PHPStan livello 9.
     */
    public function getGuidAttribute(?string $value): ?string
    {
        if (is_string($value) && '' !== $value && ! str_contains($value, ' ')) {
            return $value;
        }
        $title = $this->title;
        if ('' === $title) {
=======
>>>>>>> 6115da2 (.)
     * ---.
     */
    public function getGuidAttribute(?string $value): ?string
    {
        if (\is_string($value) && '' !== $value && ! str_contains($value, ' ')) {
            return $value;
        }
        $value = $this->title;
        if ('' === $value) {
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
                ? $this->attributes['post_type'] : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? (string) $this->attributes['post_id'] : '';
<<<<<<< HEAD
            $value = $postType.' '.$postId;
=======
<<<<<<< HEAD
            $title = $postType . ' ' . $postId;
        }
        if (null === $title || '' === $title) {
            $title = 'u-' . random_int(1, 1000);
        }
        $guid = is_string($title) ? \Str::slug($title) : '';
        $this->guid = $guid;
        $this->save();

        return $guid;
=======
            $value = $postType . ' ' . $postId;
>>>>>>> 6115da2 (.)
        }
        if (null === $value) {
            $value = 'u-'.random_int(1, 1000);
        }
        $value = Str::slug($value);
        $this->guid = $value;
        $this->save();

        return $value;
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
    }

    public function getTxtAttribute(?string $value): ?string
    {
        return $value ?? '';
    }

    /**
     * @return array
     */
    public function toSearchableArray()
    {
        return $this->only(self::SEARCHABLE_FIELDS);
    }

    /**
     * @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'image_resize_src' => 'array',
            'url_lang' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'published_at' => 'datetime',
        ];
    }
<<<<<<< HEAD
}// end class
=======
<<<<<<< HEAD
}// end class
=======
}
>>>>>>> origin/dev
>>>>>>> 6115da2 (.)
