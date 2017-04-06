<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
        'summary' => $faker->text(),
        'text' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'image' => $faker->imageUrl(640, 480),
        'slide_id' => $array[array_rand($array = App\Slide::pluck('id')->all())],                  
        'video' => $faker->url
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
        'text' => $faker->text(),
    ];
});

$factory->define(App\Faq::class, function (Faker\Generator $faker) {
    return [
        'question' => $faker->text(),
        'answer' => $faker->text(),
    ];
});

$factory->define(App\Press::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
        'text' => $faker->text(),
        'image' => $faker->imageUrl(640, 480),
        'link' => $faker->url
    ];
});

$factory->define(App\Testimonial::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text(),
        'person' => $faker->name
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
        'text' => $faker->text(),
        'summary' => $faker->text(),
        'image' => $faker->imageUrl(640, 480)
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
        'text' => $faker->text(),
        'summary' => $faker->text(),
        'item' => $faker->imageUrl(640, 480)
    ];
});

$factory->define(App\MenuItem::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'link' => $faker->url
        
    ];
});

$factory->define(App\Popup::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->text()
    ];
});

$factory->define(App\Gallery::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug ,
    ];
});

$factory->define(App\GalleryItem::class, function (Faker\Generator $faker) {
    return [
        'image' => $faker->imageUrl(640, 480),
    ];
});

$factory->define(App\GalleryItemDetail::class, function (Faker\Generator $faker) {
    return [
        'caption' => $faker->word,
    ];
});

$factory->define(App\Slide::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
    ];
});

$factory->define(App\SlideItem::class, function (Faker\Generator $faker) {
    return [
        'image' => $faker->imageUrl(640, 480),
    ];
});

$factory->define(App\SlideItemDetail::class, function (Faker\Generator $faker) {
    return [
        'caption' => $faker->word,
        'link' => $faker->url
    ];
});



