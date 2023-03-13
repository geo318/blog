<?php

namespace App\Providers;

use App\Faker\FakerImageProvider;
use App\Services\Newsletter;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(Generator::class, function ($app) {
			$faker = Factory::create();
			$faker->addProvider(new FakerImageProvider($faker));
			return $faker;
		});

		App()->bind(Newsletter::class, function () {
			$client = (new ApiClient)->setConfig([
				'apiKey' => config('services.mailchimp.key'),
				'server' => 'us11',
			]);
			return new Newsletter($client);
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Model::unguard();
		Paginator::useTailwind();
	}
}
