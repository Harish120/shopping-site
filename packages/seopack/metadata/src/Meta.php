<?php
namespace Seopack\Metadata;

class Meta{
	private $title;
	public function title($title=null){
		if(!$this->title){
			$this->title = $title;
		}
		return $this->title;
	}
} 