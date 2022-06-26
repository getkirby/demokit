<?php

class BlogPage extends Page
{
    public function cover()
    {
        return $this->children()->listed()->last()->cover();
    }
}
