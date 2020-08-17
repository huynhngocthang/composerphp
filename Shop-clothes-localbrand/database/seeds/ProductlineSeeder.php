<?php

use App\Productline;
use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productline = new Productline() ;
        $productline->id = 1 ;
        $productline->name = 'áo Hoodies' ;
        $productline->save() ;

        $productline = new Productline() ;
        $productline->id = 2 ;
        $productline->name = 'backpacks' ;
        $productline->save() ;

        $productline = new Productline() ;
        $productline->id = 3 ;
        $productline->name = 'beanies' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 4 ;
        $productline->name = 'bowler bags' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 5 ;
        $productline->name = 'caps' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 6 ;
        $productline->name = 'cap/hats' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 7 ;
        $productline->name = 'card case' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 8 ;
        $productline->name = 'crop top t-shirt' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 9 ;
        $productline->name = 'croptop jacket' ;
        $productline->save() ;


        $productline = new Productline() ;
        $productline->id = 10 ;
        $productline->name = 'crossbody bags' ;
        $productline->save() ;

    }
}
