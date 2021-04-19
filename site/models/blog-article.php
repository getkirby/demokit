<?php

class BlogArticlePage extends Page
{
    public function cover()
    {
        return $this->content()->cover()->toFile() ?? $this->image();
    }

    public function date($format = null)
    {
        $format = $format ?? $this->parent()->dateFormat()->or(option('kirby.blog.date') ?? 'd M, Y');
        return parent::date()->toDate($format);
    }
}
