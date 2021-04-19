<?php

class AgencyProjectPage extends Page
{
    public function cover()
    {
        return $this->images()->findBy('template', 'agency-project-cover') ?? $this->image();
    }
}
