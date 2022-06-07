<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>My blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<article>
    <?= $post; ?>
</article>
<a href="/">go back</a>
</body>
</html>
