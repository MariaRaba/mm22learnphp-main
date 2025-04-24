<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <a href="/admin/posts/create" class="btn btn-primary">New Post</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            
                        <a class="btn btn-info" href="/admin/posts/view/<?= $post->id ?>">View</a>

                            <a class="btn btn-warning" href="/admin/posts/edit?id=<?=$post->id?>">Edit</a>
                            <a class="btn btn-danger" href="/admin/posts/delete?id=<?=$post->id?>" >Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>