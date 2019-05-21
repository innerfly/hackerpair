<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Event
 *
 * @property-read mixed $name
 * @property-write mixed $password
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event query()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event findSimilarSlugs($attribute, $config, $slug)
 */
class Event extends Model
{

    use Sluggable;
    use SoftDeletes;

//    protected $guarded = [];

    protected $fillable = ['name', 'venue', 'city', 'description', 'enabled'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // global scope
    /*protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function (Builder $builder) {
            $builder->where('enabled', '=', 1);
        });

    }*/

    // local scope
    /**
     * @param $query \Eloquent
     */
    public function scopePublished($query)
    {
        return $query->where('enabled', 1);
    }

    public function getNameAttribute($value)
    {
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];

        $name = explode(' ', $value);

        $modifiedName = [];

        foreach ($name as $word) {
            if (!in_array(strtolower($word), $ignore)) {
                $modifiedName[] = ucfirst($word);
            } else {
                $modifiedName[] = strtolower($word);
            }

        }

        return join(' ', $modifiedName);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
            ->withTimestamps();
    }

}
