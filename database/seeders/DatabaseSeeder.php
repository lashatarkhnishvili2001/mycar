<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();


        $user = User::factory()->create([
            'name' => 'lasha',
            'email' => 'lashatarkhan@gmail.com'
        ]);

        // Car::factory(0)->create([
        //     'user_id' => $user->id
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Car::create([
        //         'title' => 'BMW',
        //         'model' => 'X5 m',
        //         'image' => 'images/BMW_X5_m.jpg',
        //         'category' => 'jeep',
        //         'engine' => '4.4',
        //         'wheel' => 'left',
        //         'fuel_type' => 'Gasoline',
        //         'location'=> 'tbilis',
        //         'year'=> '2019'
        // ]);

    //     Car::create([
    //         'title' => 'MERCEDES-BENZ',
    //             'model' => 'C300',
    //             'image' => 'images/Mercedes_C-class.jpg',
    //             'category' => 'sedan',
    //             'engine' => '3.0',
    //             'wheel' => 'left',
    //             'fuel_type' => 'Gasoline',
    //             'location' => 'batumi',
    //             'year'=> '2012'
    // ]);

    // Car::create([
    //     'title' => 'BMW',
    //         'model' => 'M5 m',
    //         'image' => '',
    //         'category' => 'sedan',
    //         'engine' => '5.0',
    //         'wheel' => 'left',
    //         'fuel_type' => 'Gasoline',
    //         'location' => 'yvareli',
    //         'year'=> '2008'
    //     ]);
    }
}
