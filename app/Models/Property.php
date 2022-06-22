<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'amenities' => 'array'
    ];

    public function setAmenitiesAttribute($value)
{
    $amenities = [];

    foreach ($value as $array_item) {
        if (!is_null($array_item['key'])) {
            $amenities[] = $array_item;
        }
    }

    $this->attributes['amenities'] = json_encode($amenities);
}

    public function images()
    {
        return $this->hasMany(PropertyHorizontalImage::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // public function hasThisAmenity(Amenity $amenity)
    // {
    //     $relatedAmenityIds = array_column($this->amenities()->get(['amenity_id'])->toArray(), 'amenity_id');

    //     if ( in_array($amenity->id, $relatedAmenityIds) ) {
    //       return true;
    //     }

    //     return false;
    // }
}
