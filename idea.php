<?php

$pdo = new PDO('sqlite:' . __DIR__ . '/db.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if columns already exist
$columns = $pdo->query("PRAGMA table_info(posts)")->fetchAll(PDO::FETCH_ASSOC);
$columnNames = array_column($columns, 'name');

if (!in_array('created_at', $columnNames)) {
    $pdo->exec("ALTER TABLE posts ADD COLUMN created_at TEXT");
    echo "Added 'created_at' column.\n";

    // Optional: initialize existing rows with current time
    $pdo->exec("UPDATE posts SET created_at = datetime('now')");
}

if (!in_array('updated_at', $columnNames)) {
    $pdo->exec("ALTER TABLE posts ADD COLUMN updated_at TEXT");
    echo "Added 'updated_at' column.\n";

    // Optional: initialize existing rows with current time
    $pdo->exec("UPDATE posts SET updated_at = datetime('now')");
}
