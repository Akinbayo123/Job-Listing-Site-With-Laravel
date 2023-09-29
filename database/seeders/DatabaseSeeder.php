<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

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
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       // Listing::create([
           // 'title'=>'Laravel Senior Developer',
            //'tags'=>'laravel, Javascript',
            //'company'=>'Ace Sname',
            //'location'=>'Boston, MA',
            //'email'=>'email1@email.com',
            //'website'=>'www.acme.com',
            //'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae illo iusto animi provident tempora repellat quibusdam ratione nisi. Reiciendis, corrupti provident tempora repellat quibusdam ratione nisi Molestiae illo iusto animi'
        //]);
        //Listing::create([
          //  'title'=>'Fullstack Engineer ',
            //'tags'=>'laravel, Backend',
            //'company'=>'Stack Industries',
            //'location'=>'New York',
            //'email'=>'email3@email.com',
            //'website'=>'www.stackindustry.com',
            //'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae illo iusto animi provident tempora repellat quibusdam ratione nisi. Reiciendis, corrupti provident tempora repellat quibusdam ratione nisi Molestiae illo iusto animi'
        //]);
    }
}
