<?php

require_once 'app/models/Post.php';

class PostController {
    private $db;
    private $postModel;

    public function __construct($db) {
        $this->db = $db;
        $this->postModel = new Post($db);
    }

    public function index() {
        $posts = $this->postModel->getAll();
        require 'app/views/posts/index.php';
    }

    public function show($id) {
        $post = $this->postModel->getById($id);
        require 'app/views/posts/show.php';
    }

    // Add create, edit, update, and delete methods as needed
}
