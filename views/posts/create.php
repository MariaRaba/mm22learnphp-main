<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <form method="POST" action="/admin/posts">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>