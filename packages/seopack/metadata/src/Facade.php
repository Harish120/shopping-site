<?php
namespace Seopack\Metadata;
use Illuminate\Support\Facades\Facade as MYFacade;

class Facade extends MYFacade{
	protected static function getFacadeAccessor(){
		return 'meta';
	}
} 