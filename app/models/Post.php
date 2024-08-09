<?php

class Post {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $authorId) {
        $stmt = $this->db->prepare('INSERT INTO posts (title, content, author_id) VALUES (:title, :content, :author_id)');
        return $stmt->execute([
            'title' => $title,
            'content' => $content,
            'author_id' => $authorId
        ]);
    }

    // Add update and delete methods as needed
}
