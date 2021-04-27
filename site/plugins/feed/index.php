<?php

if (function_exists('xml') === false) {
    function xml($value) {
        return Xml::encode($value);
    }
}

Kirby::plugin('bastianallgeier/feed', [
    'pagesMethods' => [
        'feed' => function ($params = []) {

            // set all default values
            $defaults = [
                'url'         => page()->url(),
                'title'       => 'Feed',
                'description' => '',
                'link'        => url(),
                'datefield'   => 'date',
                'imgfield'    => 'coverimage',
                'subfield'    => 'subtitle',
                'textfield'   => 'text',
                'modified'    => time(),
                'excerpt'     => true,
                'generator'   => kirby()->option('feed.generator', 'Kirby'),
                'header'      => true,
                'snippet'     => false,
            ];

            // merge them with the user input
            $options = array_merge($defaults, $params);

            // sort by date
            $items = $this->sortBy($options['datefield'], 'desc');

            // add the items
            $options['items'] = $items;
            $options['link']  = url($options['link']);

            // fetch the modification date
            if($options['datefield'] == 'modified') {
                $options['modified'] = $items->first()->modified();
            } else {
                $options['modified'] = $items->first()->date('U');
            }

            // send the xml header
            if ($options['header']) {
                kirby()->response()->type('xml');
            }

            // echo the doctype
            $html = '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL;

            // custom snippet
            if ($options['snippet']) {
                $html .= snippet($options['snippet'], $options, true);
            } else {
                $html .= Tpl::load(__DIR__ . '/template.php', $options);
            }

            return $html;

        }
    ]
]);
