<?php

class AgencyPage extends Page
{
    public function cover()
    {
        $company = $this->find('company');
        $source  = $this->find('home') ?? $company;

        return $source->cover()->toFile() ?? $company->image();
    }
}
