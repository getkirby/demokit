<?php

return function ($page) {

    $home = $page->find('home');

    $clients  = $home->featuredClients()->toPages();
    $projects = $home->featuredProjects()->toPages();

    if ($home->shuffleClients()->isTrue()) {
        $clients = $clients->shuffle();
    }

    if ($home->shuffleProjects()->isTrue()) {
        $projects = $projects->shuffle();
    }

    return [
        'home'     => $home,
        'clients'  => $clients->limit($home->maxClients()->or(6)->toInt()),
        'projects' => $projects->limit($home->maxProjects()->or(3)->toInt())
    ];
};
