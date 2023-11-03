<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//        Listing::create([
//            'title'=>'Laravel senior developer',
//            'tags'=>'laravel, javascript',
//            'company'=>'Acme Corp',
//            'location'=>'Boston,MA',
//            'email'=>'email1@email.com',
//            'website'=>'https://www.acme.com',
//            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae velit euismod, varius neque elementum, accumsan lectus.
//                            Phasellus et malesuada nisi. Phasellus blandit pharetra tellus sit amet eleifend. Curabitur dui tellus, fringilla a nibh id, aliquam dapibus est.
//                             Sed pretium augue sit amet tortor porta placerat. Nullam in porta velit, vel iaculis ligula. Maecenas lorem elit, accumsan vel porttitor vitae,
//                             rhoncus molestie nunc. Vestibulum ac lacus convallis, vulputate eros id, viverra quam.'
//        ]);
//
//        Listing::create([
//            'title'=>'FullStack Enginner',
//            'tags'=>'laravel,backend,fullstack',
//            'company'=>'Acme Corp',
//            'location'=>'Miami,SA',
//            'email'=>'email1515@email.com',
//            'website'=>'https://www.acme.com',
//            'description'=>'Aenean vel augue justo. Proin molestie felis ut dui ullamcorper faucibus.
//                            Morbi a finibus nibh, a ornare risus. Morbi blandit nec risus in fermentum.
//                            Morbi ullamcorper et libero id efficitur. Sed sollicitudin vitae nulla et convallis.
//                            Maecenas at vehicula risus, quis gravida ligula. Proin libero risus, viverra a mollis eget,
//                            tincidunt dictum urna. Sed et orci nec urna scelerisque dignissim. Aenean ultricies sit amet lorem sed ullamcorper.'
//        ]);
    }
}
