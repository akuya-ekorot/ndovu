<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/posts.css">
    </head>

    <body>
        <?php foreach ($posts as $post) : ?>
            <article>
                <h1>
                    <a href="/posts/<?= $post->slug; ?>">
                        <?= $post->title; ?>
                    </a>
                </h1>
                <p><?= $post->excerpt; ?></p>
                <p><?= date('d/m/y', $post->date); ?></p>
            </article>
        <?php endforeach; ?>
    </body>
</html>
