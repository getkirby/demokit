<?php

class AgencyClientPage extends Page
{
    public function projects()
    {
        return page('agency/projects')->children()->filter(function ($project) {
            return $project->client()->toPages()->has($this);
        });
    }
}
