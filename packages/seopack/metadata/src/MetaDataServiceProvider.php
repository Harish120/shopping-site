<?php
namespace Seopack\Metadata;

use Illuminate\Support\ServiceProvider;

class MetaDataServiceProvider extends ServiceProvider
{
	/**
	*Bootstrap any application services.
	*
	* @return void
	*/
	public function boot(){
		//
	}
	
	/** Register my application services.
	*
	* @return void
	*/

	public function register(){
		$this->app->bind('meta', function(){
			return new Meta;
		});
	}
}