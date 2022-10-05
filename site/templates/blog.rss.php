<!-- generator="Kirby" -->
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title><?= $page->title()->xml() ?></title>
    <link><?= $page->url() ?></link>
    <generator>Kirby</generator>
    <lastBuildDate><?= $articles->first()->dateFormatted('r') ?></lastBuildDate>
    <atom:link href="<?= url('blog.rss') ?>" rel="self" type="application/rss+xml" />
    <description>The latest updates from the blog</description>

    <?php foreach ($articles as $article) : ?>
      <item>
        <title><?= $article->title()->xml() ?></title>
        <link><?= $article->url() ?></link>
        <pubDate><?= $article->dateFormatted('r') ?></pubDate>
        <description>
          <![CDATA[
          <?php if ($cover = $article->cover()) : ?>
          <figure><?= $cover ?></figure>
          <?php endif ?>

          <?= $article->text()->toBlocks() ?>
        ]]>
        </description>
      </item>
    <?php endforeach ?>
  </channel>
</rss>
