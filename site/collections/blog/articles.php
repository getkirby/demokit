<?php

return function () {
    return page('blog')
        ->children()
        ->listed()
        ->sortBy('date', 'desc');
};
