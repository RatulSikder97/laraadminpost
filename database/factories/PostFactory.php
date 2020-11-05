<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Tags;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence,
        'body' => $faker->sentence,
        'tags' => Tags::all()->random()->id,
        'image' => $faker->image('public/images/',50,50,null,false),
        'user_id' => User::all()->random()->id,
    ];
});
