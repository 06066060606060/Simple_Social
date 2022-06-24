<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\{Factory, Generator};
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class FakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerPicsumImagesProvider($faker));
            return $faker;
        });
    }
}