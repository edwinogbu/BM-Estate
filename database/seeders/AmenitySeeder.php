<?php

namespace Database\Seeders;
use App\Models\Amenity;

use Illuminate\Database\Seeder;
use App\Helpers\ArrayOfAmenities;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = ArrayOfAmenities::amenities();

      foreach ($amenities as $amenity) {
        Amenity::create($amenity);
      }
    }
}
