<?php

class ShopPage extends Page
{
    public function cover()
    {
        return $this->children()->first()->image();
    }
}
