<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Provider\Base;

class ItalianRailwayCityProvider extends Base
{
    protected static $railwayCities = [
        'Roma', 'Milano', 'Napoli', 'Torino', 'Firenze', 'Bologna', 'Venezia', 'Verona',
        'Genova', 'Palermo', 'Catania', 'Bari', 'Trieste', 'Padova', 'Bergamo',
    ];


    public static function italianRailwayCity()
    {
        return static::randomElement(static::$railwayCities);
    }
}
