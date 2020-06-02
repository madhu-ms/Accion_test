<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'name','properties',
    ];

//     public function setPropertiesAttribute($value)
// {
//     $properties = [];

//     foreach ($value as $array_item) {
//         if (!is_null($array_item['key'])) {
//             $properties[] = $array_item;
//         }
//     }

//     $this->attributes['properties'] = json_encode($properties);
// }

}
