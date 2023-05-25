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

    protected static $railwayAgency = [
        'Ferrovie dello Stato Italiane',
        'Trenitalia',
        'Italo',
        'Trenord',
        'Ferrovie Emilia Romagna'
    ];


    public static function italianRailwayCity()
    {
        return static::randomElement(static::$railwayCities);
    }

    public static function italianRailwayAgency()
    {
        return static::randomElement(static::$railwayAgency);
    }
}
