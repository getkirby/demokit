<?php

class BlogArticlePage extends Page
{
	public function cover()
	{
		return $this->content()->cover()->toFile() ?? $this->image();
	}

	public function dateFormatted($format = null)
	{
		$format = $format ?? $this->parent()->dateFormat()->or('d M, Y');
		return parent::date()->toDate($format);
	}
}
