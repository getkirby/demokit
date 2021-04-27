<?php

class PortfolioPage extends Page
{
    public function cover()
    {
        return $this->find('projects')->children()->first()->image();
    }
}
