<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'longitude',
        'latitude',
        'name'
    ];

    public static function addUserLocation($request){
        Location::create([
            'latitude'=>$request->latitude,
            'longitude'=>$request->latitude,
            'name'=>$request->name,
        ]);
    }
}
