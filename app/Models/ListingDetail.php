<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use App\Services\TranslationService;

class ListingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle', 'description', 'price', 'google_map_link',
        'listing_for', 'status', 'agent_id', 'city_id',
        'area_id', 'property_type_id', 'property_features_id',
        'property_details_id'
    ];

    // protected $translator;

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);
    //     $this->translator = app(TranslationService::class);
    // }

    // Accessors for automatic translation
//     public function getTittleAttribute($value)
// {
//     dd($value); // Check if this is running
//     return App::getLocale() !== 'en' ? $this->translator->translate($value, App::getLocale()) : $value;
// }

// public function getListingForAttribute($value)
// {
//     if (App::getLocale() !== 'en') {
//         return app(TranslationService::class)->translate($value, App::getLocale());
//     }
//     return $value;
// }

    // Relationships
    public function agent() { return $this->belongsTo(Agent::class, 'agent_id'); }
    public function city() { return $this->belongsTo(City::class, 'city_id'); }
    public function area() { return $this->belongsTo(Area::class, 'area_id'); }
    public function propertyType() { return $this->belongsTo(PropertyType::class, 'property_type_id'); }
    public function propertyFeatures() { return $this->belongsTo(PropertyFeature::class, 'property_features_id'); }
    public function propertyDetails() { return $this->belongsTo(PropertyDetail::class, 'property_details_id'); }
    public function images() { return $this->hasMany(ListingImage::class, 'listing_id'); }

    public static function boot()
    {
        parent::boot();
        static::created(function ($listing) {
            if ($listing->slug()->doesntExist()) {
                $slug = $listing->generateSlug();
                Slug::create([
                    'listing_id' => $listing->id,
                    'slug' => $slug,
                ]);
            }
        });
    }

    public function generateSlug()
    {
        $slugBase = Str::slug("{$this->rooms}-bedroom-{$this->propertyType->pt_name}-{$this->listing_for}-{$this->area->name}-{$this->city->city_name}");
        return "{$slugBase}-{$this->id}";
    }

    public function slug()
    {
        return $this->hasOne(Slug::class, 'listing_id');
    }
}
