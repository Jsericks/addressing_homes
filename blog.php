<?php
  if (isset($_GET['id'])) {
    $blog_id = intval($_GET['id']);
  }
  if (empty($blog_id)){
    header("Location: blog.html");
  }
?>