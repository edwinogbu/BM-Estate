<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbService extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $casts = [
        'service_required' => 'array',
        'survey_purpose' => 'array',
        'prefer_contact' => 'array',
    ];

//     public function setAmenitiesAttribute($value)
// {
//     $amenities = [];

//     foreach ($value as $array_item) {
//         if (!is_null($array_item['key'])) {
//             $amenities[] = $array_item;
//         }
//     }

//     $this->attributes['amenities'] = json_encode($amenities);
// }



public function setServiceRequiredAttribute($value)
{

    $service_required = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $service_required[] = $array_item;
            }
        }

        $this->attributes['amenities'] = json_encode($amenities);
}

public function getServiceRequiredAttribute($value)
{
    return $this->attributes['service_required'] = json_decode($value);
}


public function setSurveyPurposeAttribute($value)
{
    $this->attributes['survey_purpose'] = json_encode($value);
}

public function getSurveyPurposeAttribute($value)
{
    return $this->attributes['survey_purpose'] = json_decode($value);
}

public function setPreferContactAttribute($value)
{
    $this->attributes['prefer_contact'] = json_encode($value);
}

public function getPreferContactAttribute($value)
{
    return $this->attributes['prefer_contact'] = json_decode($value);
}

}
