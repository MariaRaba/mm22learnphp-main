<?php include __DIR__ . '/../partials/header.php'  ?>

<main class="container mt-4">
    <h2>Post Details</h2>
    <br>

    <table class="table table-bordered">
        <tr>
            <th>ID:</th>
            <td><?= $post->id; ?></td>
        </tr>
        <tr>
            <th>Title:</th>
            <td><?= $post->title; ?></td>
        </tr>
        <tr>
            <th>Content:</th>
            <td><?= $post->body; ?></td>
        </tr>
        <tr>
            <th>Created at:</th>
            <td><?= $post->created_at; ?></td>
        </tr>
        <tr>
            <th>Published at:</th>
            <td><?= $post->updated_at; ?></td>
        </tr>
    </table>

    <div class="mb-3 mt-3">
        <a href="/admin/posts" class="btn btn-secondary">Back to Posts</a>
    </div>
</main>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 8px;
}
</style>

<?php include __DIR__ . '/../partials/footer.php'  ?>
