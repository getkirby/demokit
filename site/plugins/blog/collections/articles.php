<?php

return function () {
    return blog()
        ->children()
        ->listed()
        ->sortBy('date', 'desc');
};
