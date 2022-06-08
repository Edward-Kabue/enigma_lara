<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>My blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach ($posts as $post) : ?>
<article>
    <?= $post; ?>
</article>
<?php endforeach; ?>
</body>
</html>
