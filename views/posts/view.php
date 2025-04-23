<?php include __DIR__ . '/../partials/header.php'  ?>

<main class="container mt-4">
        <h2>Post Details</h2>
        <br>
        <div class="mb-3">
            <strong>ID:</strong> <?= $post->id; ?>
        </div>

        <div class="mb-3">
            <strong>Title:</strong> <?= $post->title; ?>
        </div>
        
        <div class="mb-3">
            <strong>Content:</strong> <?= $post->body; ?>
        </div>
        
        <div class="mb-3">
            <strong>Created at:</strong> <?= $post->created_at; ?>
        </div>

        <div class="mb-3">
            <strong>Published at:</strong> <?= $post->updated_at; ?>
        </div>

        <div class="mb-3">
            <a href="/admin/posts" class="btn btn-secondary">Back to Posts</a>
        </div>
    </article>
</main>


<?php include __DIR__ . '/../partials/footer.php'  ?>