<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<title>My blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach ($posts as $post)  :  ?>
<article>
    <a>
        <h1>
            <a href="/post/<?= $post->slug; ?>"><?= $post->title; ?></h1></a>
    <div>
        <?= $post->excerpt?>
    </div>
</article>
<?php endforeach; ?>
</body>
</html>
