<?php

use Kirby\Cms\Blueprint;

class BlueprintView extends Blueprint
{
    public function toYaml()
    {
        return Yaml::encode($this->props);
    }
}

function blueprint($name) {
    $file = kirby()->root('blueprints') . '/' . $name . '.yml';
    return F::read($file);
}
