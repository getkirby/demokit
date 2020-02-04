<?php

class RestaurantPage extends Page
{
    public function cover()
    {
        return $this->images()->findBy('template', 'restaurant-cover') ?? $this->image();
    }
}
