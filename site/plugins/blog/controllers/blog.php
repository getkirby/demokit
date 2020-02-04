<?php

return function () {
    return [
        'articles' => collection('blog/articles')->paginate(option('kirby.blog.pagination.limit', 10))
    ];
};
