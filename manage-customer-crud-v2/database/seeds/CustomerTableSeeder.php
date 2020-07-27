<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer ;
        $customer->id = 1 ;
        $customer->name = 'Lê phú Nhật Quang' ;
        $customer->email = 'phuquang@gmail.com' ;
        $customer->dob = NOW() ;
        $customer->city_id = 1 ;
        $customer->created_at = now() ;
        $customer->updated_at = now() ;
        $customer->save() ;

        $customer = new Customer ;
        $customer->id = 2 ;
        $customer->name = 'Ngô Hồ Phú Tiên' ;
        $customer->email = 'phutien@gmail.com' ;
        $customer->dob = NOW() ;
        $customer->city_id = 1 ;
        $customer->created_at = now() ;
        $customer->updated_at = now() ;
        $customer->save() ;

        $customer = new Customer ;
        $customer->id = 3 ;
        $customer->name = 'Ngô Hồ Phú Giác' ;
        $customer->email = 'phugiac@gmail.com' ;
        $customer->dob = NOW() ;
        $customer->city_id = 2 ;
        $customer->created_at = now() ;
        $customer->updated_at = now() ;
        $customer->save() ;
    }
}
