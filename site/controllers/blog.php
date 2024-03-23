<?php

return function ($page) {
	$tag      = param('tag');
	$limit    = $page->limit()->or(6)->toInt();
	$articles = collection('blog/articles');

	if (empty($tag) === false) {
		$articles = $articles->filterBy('tags', $tag, ',');
	}

	return [
		'tag'      => $tag,
		'articles' => $articles->paginate($limit)
	];
};
