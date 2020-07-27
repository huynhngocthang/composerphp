<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City() ;
        $city->id = 1 ;
        $city->name = 'Hà Nội';
        $city->created_at = now() ;
        $city->updated_at = now() ;
        $city->save() ;

        $city = new City() ;
        $city->id = 2 ;
        $city->name = 'Hồ Chí Minh';
        $city->created_at = now() ;
        $city->updated_at = now() ;
        $city->save() ;

        $city = new City() ;
        $city->id = 3 ;
        $city->name = 'Hải Phòng';
        $city->created_at = now() ;
        $city->updated_at = now() ;
        $city->save() ;

        $city = new City() ;
        $city->id = 4 ;
        $city->name = 'Hải Dương';
        $city->created_at = now() ;
        $city->updated_at = now() ;
        $city->save() ;
    }
}
